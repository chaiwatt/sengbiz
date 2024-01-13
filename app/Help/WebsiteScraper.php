<?php

namespace App\Help;

use Goutte\Client;
use App\Models\Post;
use App\Models\Amphur;
use App\Models\Scraped;
use App\Models\PostInfo;
use App\Models\Province;
use App\Models\PidScrape;
use App\Models\PostImage;
use App\Models\SubCategory;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use App\Models\PostNearPlace;
use App\Models\PostContactPhone;
use App\Models\SubMinorCategory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class WebsiteScraper
{
    

    public function scrapList()
    {
        for ($i = 2; $i >= 1; $i--) {
            //https://www.thaibizpost.com/c/tea-shops/?page=1
            //https://www.thaibizpost.com/c/properties/?page=1
            //https://www.thaibizpost.com/c/shop-spaces/?page=1
            $url = 'https://www.thaibizpost.com/listings/?page=' . $i;
            $client = new Client();
            $crawler = $client->request('GET', $url);
            $crawler->filter('div.listings-title a')->each(function ($node) use (&$ids) {
                preg_match('/\/pid\/(\d+)\//', $node->attr('href'), $matches);
                if (isset($matches[1])) {
                   $pid = trim($matches[1]);
                    $existingPid = PidScrape::where('pid',$pid)->first();
                    if (!$existingPid) {
                        PidScrape::create(['pid' => $pid]);
                    } 
                }
            });
            sleep(2);
        }
    }

    function scrap()
    {

        $pidScrapes = PidScrape::all();

        if ($pidScrapes->count() == 0){
            return;
        }

        $orgPostId = $pidScrapes->first()->pid;

        $url = 'https://www.thaibizpost.com/pid/'.$orgPostId;
        
        $postInfo = PostInfo::where('org_id',$orgPostId)->first();
        $scrapedPid = Scraped::where('pid',$orgPostId)->first();

        if ($postInfo !== null || $scrapedPid !== null) {
             return;
        }

        $client = new Client();
        $crawler = $client->request('GET', $url);

        $orgUser = '';
        // ใช้ XPath ในการค้นหา <div class="media-heading">
        $mediaHeadingDiv = $crawler->filterXPath('//div[contains(@class, "media-heading")]');

        // ตรวจสอบว่ามีข้อมูลหรือไม่
        if ($mediaHeadingDiv->count() > 0) {
            // ใช้ CSS Selector ในการค้นหา <a> ภายใน <div class="media-heading">
            $aTag = $mediaHeadingDiv->filter('a');

            // ตรวจสอบว่ามี <a> หรือไม่
            if ($aTag->count() > 0) {
                // ดึงข้อความที่ต้องการ (เช่น "pesce") จากคุณสามารถใช้ text() หรือ extract() ก็ได้
                $username = $aTag->text();

                // แสดงผลลัพธ์
                $orgUser = $username;
            } 
        } 

        // ใช้ selector CSS เพื่อค้นหา element <h1>
        $orgTitle = preg_replace('/[\x{200B}-\x{200D}\x{FEFF}]/u', '', $crawler->filter('h1.panel-title.topic-title')->text());
        $orgSlug = trim(str_replace(' ', '-', $orgTitle), '-');
        $price = $crawler->filter('meta[itemprop="price"]')->attr('content');
        $price = preg_replace('/[^0-9]/', '', $price);

        if (empty($price)) {
            $price = 0;
        }

        $categories = $crawler->filter('div.col-md-12.cat-list-ht:contains("หมวดหมู่")')->filter('a')->each(function ($category) {
            return $category->text();
        });

        
        $locations = $crawler->filter('div.col-md-12.cat-list-ht:contains("ที่ตั้ง")')->filter('a')->each(function ($location) {
            return $location->text();
        });

        $nears = $crawler->filter('div.col-md-12.cat-list-ht:contains("สถานที่ใกล้เคียง")')->filter('a')->each(function ($location) {
            return $location->text();
        });


        // ใช้ selector CSS เพื่อค้นหา element <a> ที่มี data-fancybox="gallery" และ href ต้องมี "digitaloceanspaces"
        $links = $crawler->filter('a[data-fancybox="gallery"][href*=digitaloceanspaces]')->each(function ($link) {
            return $link->attr('href');
        });

        $htmlContent = "";
        $stringContent = "";
        $phoneNumbers = [];
        // ใช้ XPath ในการค้นหา <div> ที่มี class "forum-content"
        $forumContentDivs = $crawler->filterXPath('//div[contains(@class, "forum-content")]');

        // ใช้ XPath เพื่อค้นหา <iframe> ที่มี class เป็น "embed-responsive-item"
        $iframeNodeList = $crawler->filterXPath('//iframe[contains(@class, "embed-responsive-item")]');

        $coordinates = array();
        // ตรวจสอบว่ามี <iframe> ที่พบหรือไม่
        if ($iframeNodeList->count() > 0) {
            // ดึงค่า src จากแรกที่พบ
            $srcAttributeValue = $iframeNodeList->first()->attr('src');

            // ตรวจสอบว่าค่า src ไม่ใช่ว่าง
            if (!empty($srcAttributeValue)) {
                // ทำอะไรกับ $srcAttributeValue ต่อไป
                $googleMap = $srcAttributeValue;
                // แยกส่วนของ query จาก URL
                // ใช้ parse_url เพื่อแยก URL เป็นส่วนต่าง ๆ
                $urlParts = parse_url($googleMap);

                // ตรวจสอบว่า query string มีค่าหรือไม่
                if (isset($urlParts['query'])) {
                    // ใช้ parse_str เพื่อแยก query string เป็น associative array
                    parse_str($urlParts['query'], $queryParameters);
                    // ตรวจสอบว่า q อยู่ใน queryParameters
                    if (isset($queryParameters['q'])) {
                        list($latitude, $longitude) = explode(',', $queryParameters['q']);
                    
                        $coordinates = [
                            'latitude' => $latitude,
                            'longitude' => $longitude,
                        ];
                    }
                }

            } 
        }

        
        // ตรวจสอบว่ามีข้อมูลหรือไม่
        if ($forumContentDivs->count() > 0) {
            // ให้กูไปหา div ที่ต้องการ
            $forumContentDiv = $forumContentDivs->first();

            // ลบ div ที่ต้องการ
            $childrenToRemove = $forumContentDiv->filter('div');
            $childrenToRemove->each(function ($childToRemove) {
                $childToRemove->getNode(0)->parentNode->removeChild($childToRemove->getNode(0));
            });

            // ให้กูไปหา <a> tag ที่มี class="__cf_email__" ภายใน $forumContentDiv
            $aTagsToRemove = $forumContentDiv->filterXPath('.//a[@class="__cf_email__"]');

            // ลบ <a> tag ที่ต้องการ
            $aTagsToRemove->each(function ($aTagToRemove) {
                $aTagToRemove->getNode(0)->parentNode->removeChild($aTagToRemove->getNode(0));
            });

            $stringContent = preg_replace('/[\x{200B}-\x{200D}\x{FEFF}]/u', '', $forumContentDiv->text());

            $stringContent = preg_replace("/\\\\u{[a-fA-F0-9]+}/u", '', $stringContent);

            // $matches[0] จะเก็บเบอร์โทรทั้งหมดที่พบ
            $pattern = '/(\d{10}|\d{3}-\d{3}-\d{4}|\d{3}\d{7})/';
            preg_match_all($pattern, $stringContent, $matches);

            // ลบเครื่องหมาย '-' ออกจากทุกเบอร์โทรศัพท์ และใช้ array_unique
            $phoneNumbers = array_unique(array_map(function ($phoneNumber) {
                return str_replace('-', '', $phoneNumber);
            }, $matches[0]));

            // แสดงข้อมูลที่ต้องการจาก <div> หลัก
            $content = preg_replace('/[\x{200B}-\x{200D}\x{FEFF}]/u', '', $forumContentDiv->html());
            $content = preg_replace("/\\\\u{[a-fA-F0-9]+}/u", '', $content);

            // ลบ \n ทั้งหมด
            $content = str_replace("\n", '', $content);

            // ลบ """ ทั้งหมด
            $content = str_replace('"""', '', $content);
            $htmlContent = preg_replace('/<br\s*\/?>\s*<br\s*\/?>/i', '<br>', $content);
        } 

        //dd($result = preg_replace('/\p{L}/u', '', $stringContent));
        $result = preg_replace('/[^\p{L}\p{M}0-9\s.,-]/u', '', $stringContent);

        $result = preg_replace('/\s{2,}/', ' ', $result);
        $result2 = preg_replace('/\s/', '-', $result);

        //$strFilename =$this->getString($orgTitle,$result,30);
        $postTitle =$this->getString($orgTitle,$result,50);
        $slug = trim(str_replace(' ', '-', $postTitle), '-');
        $postDesctiption =trim($this->getString($orgTitle,$result,110));
        //$postDesctiption =$orgTitle . ' ' . trim($this->getString($orgTitle,$result,80));

        $index = 1;
        $filenames = []; 
        
        if (!File::exists(public_path('images'))) {
            mkdir(public_path('images'));
        }
        if (!File::isWritable(public_path('images'))) {
            chmod(public_path('images'), 0777);
        }

        if (!File::exists(storage_path('download'))) {
            mkdir(storage_path('download'));
        }
        if (!File::isWritable(storage_path('download'))) {
            chmod(storage_path('download'), 0777);
        }

        if (count($links) > 0) {
            $strFilename = mb_substr($result, 0, 30, 'UTF-8');
            $filePrefix = preg_replace('/\s/', '-', $strFilename);
          
            foreach ($links as $link) {
                // $response = Http::get($link);
                // $content = $response->body();
                // $fname = "assets/download/{$filePrefix}-{$index}.jpg";
                // $filename = public_path($fname);
                // $filenames[] = $fname;
                // file_put_contents($filename, $content);
                // $index++;

                $manager = new ImageManager(new Driver());
                $response = Http::get($link);
                $content = $response->body();
                $jpgfile= "download/{$orgSlug}-{$index}.jpg";
            
                Storage::put($jpgfile, $content);
                $file = Storage::get($jpgfile);
                
                $image = $manager->read($file);
                $image->place(Storage::get('download/logo.png'));
                $image->scale(width: 500);
                $output = public_path("images/"."{$orgSlug}-{$index}".".webp");
                $image->toWebp()->save($output);
                $filenames[] = $output;
                Storage::delete($jpgfile);
                $index++;

            }       
        }
    //dd($orgUser, $orgPostId ,$orgTitle,$price,$categories,$locations,$links,$nears,$coordinates,$result,$result2,$postTitle,$postDesctiption,$phoneNumbers,$stringContent,$htmlContent);
        if ($stringContent != "" && count($categories) != 0 && count($locations) != 0){
            $mainCategory = MainCategory::where('name',$categories[0])->first();
            $mainCategoryId = null;
            $subCategoryId = null;
            $subMinorCategoryId = null;
            if($mainCategory !== null){
                if(count($categories) > 1 ){
                    $mainCategoryId = $mainCategory->id;
                    $subCategory = SubCategory::where('name',$categories[1])->first();
                    if($subCategory !== null){
                        $subCategoryId = $subCategory->id;
                    }
                    if ($mainCategoryId === 1){
                        if(count($categories) == 3){
                            $subMinorCategory = SubMinorCategory::where('name',$categories[2])->first();
                            if($subMinorCategory !== null){
                                $subMinorCategoryId = $subMinorCategory->id;
                            }
                        }
                        
                    }
                }
                
            }

            // 
            $provinceId = null;
            $amphurId = null;
            if(count($locations) == 1){
                $province = Province::where('name',$locations[0])->first();
                if ($province !== null){
                    $provinceId = $province->id;
                }

            }else{
                $province = Province::where('name',$locations[1])->first();
                if ($province !== null){
                    if(count($locations) == 2){
                        $provinceId = $province->id;
                        $amphur = Amphur::where('name',$locations[0])->first();
                        if($amphur !== null){
                            $amphurId = $amphur->id;
                        }
                    }
                }

            }
            

            if ($subCategoryId !== null && $provinceId !== null && $price != ''){
                $post = Post::create([
                    'main_category_id' => $mainCategoryId,
                    'sub_category_id' => $subCategoryId,
                    'sub_minor_category_id' => $subMinorCategoryId,
                    'title' => $postTitle,
                    'org_title' => $orgTitle,
                    'slug' => $slug,
                    'org_slug' => $orgSlug,
                    'price' => $price,
                    'description' => $postDesctiption,
                    'body' => $htmlContent
                ]);

                $lat = null;
                $ng = null;
                if (count($coordinates) != 0){
                    $lat = $coordinates['latitude'];
                    $ng = $coordinates['longitude'];
                }
                PostInfo::create([
                    'post_id' => $post->id,
                    'org_id' => $orgPostId,
                    'org_user' => $orgUser,
                    'lat' => $lat,
                    'lng' => $ng,
                    'province_id' => $provinceId,
                    'amphur_id' => $amphurId,
                ]);

                if (count($filenames) != 0){
                    foreach ($filenames as $fname) {
                        PostImage::create([
                            'post_id' => $post->id,
                            'path' => $fname,
                            'alt' => $strFilename .' ' . implode(' ', $locations),
                        ]);
                    }
                }

                if (count($phoneNumbers) != 0){
                    foreach ($phoneNumbers as $phoneNumber) {
                        PostContactPhone::create([
                            'post_id' => $post->id,
                            'phone' => $phoneNumber
                        ]);
                    }
                }

                if (count($nears) != 0){
                    foreach ($nears as $near) {
                        PostNearPlace::create([
                            'post_id' => $post->id,
                            'name' => $near
                        ]);
                    }
                }
                PidScrape::where('pid',$orgPostId)->delete();
                Scraped::create(['pid' => $orgPostId]);
                dd($orgUser, $orgPostId ,$orgTitle,$price,$categories,$locations,$links,$nears,$coordinates,$result,$result2,$postTitle,$postDesctiption,$phoneNumbers,$stringContent,$htmlContent);
            }
        }    
    }

    function getString($defaultTitle,$string,$len)
    {
        $wordCount = mb_strlen($string, 'UTF-8');
        $trimmedResult = $string;
        if ($wordCount > $len) {
            $trimmedResult = mb_substr($string, 0, $len, 'UTF-8');
            $nextSpacePosition = mb_strpos($string, ' ', $len, 'UTF-8');
            if ($nextSpacePosition !== false) {
                $trimmedResult = mb_substr($string, 0, $nextSpacePosition, 'UTF-8');
            }
            $arr = ['www', 'http', '.com'];
  
            foreach ($arr as $substring) {
                if (stripos($trimmedResult, $substring) !== false) {
                    $trimmedResult = $defaultTitle;
                    break;
                } 
            }
        }
        return $trimmedResult;
    }


}
