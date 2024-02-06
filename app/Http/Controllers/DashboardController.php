<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\PostInfo;
use App\Models\Province;
use App\Models\NearPlace;
use App\Models\PostImage;
use App\Models\PostPackage;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use App\Models\PostNearPlace;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
    
        $posts = Post::where('user_id',$user->id)->get();
        
        return view('dashboard.index',[
            'posts' =>$posts
        ]);
    }
    public function create()
    {
        $provinces = Province::all();
        $postPackages = PostPackage::all();
        $mainCategories = MainCategory::all();
        $nearPlaces = NearPlace::all();
        return view('dashboard.create',[
            'postPackages' =>$postPackages,
            'provinces' => $provinces,
            'mainCategories' => $mainCategories,
            'nearPlaces' => $nearPlaces
        ]); 
    }

    public function upload(Request $request)
    {
        try {
            $image = $request->file('file');
            $originalName = $image->getClientOriginalName();
            $rawFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);

            // ย้ายไฟล์ที่อัพโหลดไปยังโฟลเดอร์ images
            $image->move(public_path('/images/'), $originalName);

            $sPath = public_path('/images/'.$originalName);
            $manager = new ImageManager(Driver::class);
            $image = $manager->read($sPath);
 
            $image->cover(600, 366);
            $webpFilename = $rawFilename.'.webp';
            $image->toWebp(60)->save(public_path('/images/'.$webpFilename));
            unlink($sPath);

            $fileSize = filesize(public_path('/images/'.$webpFilename));

            return response()->json(['image' => $webpFilename,'size' =>  round($fileSize / (1024 * 1024), 2, PHP_ROUND_HALF_UP)]); 
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function upload_(Request $request)
    {
        try {
            $image = $request->file('file');
            $originalName = $image->getClientOriginalName();
            $rawFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);

            // ย้ายไฟล์ที่อัพโหลดไปยังโฟลเดอร์ images
            $image->move(public_path('images'), $originalName);

            // ดาวน์โหลดไฟล์จาก URL
            $link = url('/images/'.$originalName );
            $response = Http::get($link);
            $content = $response->body();

            // บันทึกไฟล์ที่ดาวน์โหลดลงในโฟลเดอร์ images
            $fname = "images/" . $image->getClientOriginalName();
            $filename = public_path($fname);
            file_put_contents($filename, $content);

            // จัดการรูปภาพ
            $manager = new ImageManager(new Driver());
            $image = $manager->read($filename);
            $image->place(public_path("assets/images/logo.png"));
            // $image->scale(width: 900);

            // แปลงไฟล์เป็น WebP และบันทึก
            $timestamp = Carbon::now()->timestamp;
            $webpFilename = "images/{$rawFilename}_{$timestamp}.webp";
            $output = public_path($webpFilename);
            $image->toWebp(60)->save($output);

            // ลบไฟล์ที่อัพโหลดและไฟล์ที่ดาวน์โหลดมา ยกเว้นไฟล์ .webp
            unlink($filename); // ลบไฟล์ที่อัพโหลด

            return response()->json(['image' => $webpFilename]); // ส่งคืนชื่อไฟล์ .webp
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $title = $request->data['title'];
        $price = $request->data['price'];
        $mainCategory = $request->data['mainCategory'];
        $subCategory = $request->data['subCategory'];
        $subMinorCategory = $request->data['subMinorCategory'];
        $province = $request->data['province'];
        $amphur = $request->data['amphur'];
        $lat = $request->data['lat'];
        $lng = $request->data['lng'];
        $nearPlace = $request->data['nearPlace'];
        $phone1 = $request->data['phone1'];
        $phone2 = $request->data['phone2'];
        $youtube = $request->data['youtube'];
        $lineAccount = $request->data['lineAccount'];
        $facebook = $request->data['facebook'];
        $website = $request->data['website'];
        $needBroker = $request->data['needBroker'];
        $percent = $request->data['percent'];
        $plainContent = $request->data['plainContent'];
        $content = $request->data['content'];
        $uploadedImages = $request->data['uploadedImages'];

        $postDesctiption = $this->removePropertyCode($plainContent,"รหัสทรัพย์");
        $postDesctiption =trim(mb_substr($postDesctiption, 0, 100, 'UTF-8'));

        $slug = trim(str_replace('   ', '-', $title), '-');
        $slug = trim(str_replace('  ', '-', $slug), '-');
        $slug = trim(str_replace(' ', '-', $slug), '-');
        $slug = str_replace(',', '', $slug);


        $post = Post::create([
            'user_id' => $user->id,
            'main_category_id' => $mainCategory,
            'sub_category_id' => $subCategory,
            'sub_minor_category_id' => $subMinorCategory,
            'title' => $title,
            'slug' => $slug,
            'price' => $price,
            'description' => $postDesctiption,
            'body' => $content,
            'need_broker' => $needBroker,
            'percent' => $percent
        ]);

        foreach ($uploadedImages as $uploadedImage)
        {
            PostImage::create([
                'post_id' => $post->id,
                'path' => 'images/'.$uploadedImage['image'],
                'size' => $uploadedImage['size'],
                'alt' => $title
            ]);
        }

        PostInfo::create([
            'post_id' => $post->id,
            'lat' => $lat,
            'lng' => $lng,
            'phone1' => $phone1,
            'phone2' => $phone2,
            'line_account' => $lineAccount,
            'youtube' => $youtube,
            'facebook' => $facebook,
            'website' => $website,
            'province_id' => $province,
            'amphur_id' => $amphur,
        ]);
        
        PostNearPlace::create([
            'post_id' => $post->id,
            'name' => $nearPlace
        ]);

        $this->makeThumbnail($post->id);

       return response()->json(['success' => $post]);

    }

    public function update(Request $request)
    {
        $postId = $request->data['postId'];
        
        $title = $request->data['title'];
        $price = $request->data['price'];
        $mainCategory = $request->data['mainCategory'];
        $subCategory = $request->data['subCategory'];
        $subMinorCategory = $request->data['subMinorCategory'];
        $province = $request->data['province'];
        $amphur = $request->data['amphur'];
        $lat = $request->data['lat'];
        $lng = $request->data['lng'];
        $nearPlace = $request->data['nearPlace'];
        $phone1 = $request->data['phone1'];
        $phone2 = $request->data['phone2'];
        $youtube = $request->data['youtube'];
        $lineAccount = $request->data['lineAccount'];
        $facebook = $request->data['facebook'];
        $website = $request->data['website'];
        $needBroker = $request->data['needBroker'];
        $percent = $request->data['percent'];
        $plainContent = $request->data['plainContent'];
        $content = $request->data['content'];
    
        $postDesctiption = $this->removePropertyCode($plainContent,"รหัสทรัพย์");
        $postDesctiption =trim(mb_substr($postDesctiption, 0, 100, 'UTF-8'));

        $slug = trim(str_replace('   ', '-', $title), '-');
        $slug = trim(str_replace('  ', '-', $slug), '-');
        $slug = trim(str_replace(' ', '-', $slug), '-');
        $slug = str_replace(',', '', $slug);


        Post::find($postId)->update([
            'main_category_id' => $mainCategory,
            'sub_category_id' => $subCategory,
            'sub_minor_category_id' => $subMinorCategory,
            'title' => $title,
            'slug' => $slug,
            'price' => $price,
            'description' => $postDesctiption,
            'body' => $content,
            'need_broker' => $needBroker,
            'percent' => $percent
        ]);

        if (isset($request->data['uploadedImages'])) {
            $uploadedImages = $request->data['uploadedImages'];
            if(count($uploadedImages) != 0)
            {
                foreach ($uploadedImages as $uploadedImage)
                {
                    PostImage::create([
                        'post_id' => $postId,
                        'path' => 'images/'.$uploadedImage['image'],
                        'size' => $uploadedImage['size'],
                        'alt' => $title
                    ]);
                }
            }
        }        
   
        PostInfo::where('post_id',$postId)->update([
            'lat' => $lat,
            'lng' => $lng,
            'phone1' => $phone1,
            'phone2' => $phone2,
            'line_account' => $lineAccount,
            'youtube' => $youtube,
            'facebook' => $facebook,
            'website' => $website,
            'province_id' => $province,
            'amphur_id' => $amphur,
        ]);
        
        PostNearPlace::where('post_id',$postId)->update([
            'name' => $nearPlace
        ]);

        
        $this->makeThumbnail($postId);

       return response()->json(['success' => 'success']);

    }

    public function makeThumbnail($postId)
    {
        $post = Post::find($postId);
        $postImage = PostImage::where('post_id',$post->id)->get()->first();// $post->postImages->first();
        if($postImage !== null){
            $fname = $postImage->path;
            $filename = public_path($fname);
            $manager = new ImageManager(new Driver());
            $image = $manager->read($filename);

            $image->scale(width: 350);
            $image->cover(300, 200);

            $newFileName = str_replace('.webp', '-thumbnail.webp', $fname);

            $output = public_path($newFileName);
            $image->toWebp(60)->save($output);

            $post->update([
                'thumb_nail' => $newFileName
            ]);
        }
    }

    public function view($id)
    {
        $post = Post::find($id);
        $provinces = Province::all();
        $postPackages = PostPackage::all();
        $mainCategories = MainCategory::all();
        $nearPlaces = NearPlace::all();
        
        return view('dashboard.view',[
            'postPackages' =>$postPackages,
            'provinces' => $provinces,
            'mainCategories' => $mainCategories,
            'nearPlaces' => $nearPlaces,
            'post' => $post
        ]); 
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

    public function removePropertyCode($text,$keyWord)
    {
        $start = mb_strpos($text, $keyWord);
        
        if ($start === false) {
            return $text;
        }

        $next_digit = $start + mb_strlen($keyWord);

        while (!is_numeric(mb_substr($text, $next_digit, 1, 'utf-8'))) {
            $next_digit++;
        }

        while (is_numeric(mb_substr($text, $next_digit, 1, 'utf-8'))) {
            $next_digit++;
        }

        $textToRemove = mb_substr($text, $start, $next_digit-$start, 'utf-8');
        $text = str_replace($textToRemove, '', $text);

        return $text;
    }

    public function profile()
    {
        $user = Auth::user();
        return view('dashboard.profile',[
            'user' =>$user
        ]); 
    }

  
}
