<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Amphur;
use GuzzleHttp\Client;
use App\Models\PostInfo;
use App\Models\PostView;
use App\Models\Province;
use App\Rules\ReCaptcha;
use App\Models\PostImage;
use App\Models\PriceRange;
use App\Models\SubCategory;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Models\SubMinorCategory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Intervention\Image\ImageManager;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;

class PostController extends Controller
{

    // public function index()
    // {
    //     $provinces = Province::all();
    //     $mainCategories = MainCategory::all();
    //     $asidePosts = Post::orderByDesc('is_ads')
    //             ->latest('updated_at')
    //             ->paginate(15);

    //     $allPosts = Post::all();
    //     $priceRanges = PriceRange::all();

    //     $posts = Post::orderByDesc('updated_at')->paginate(15);
    //     return view('post.index',[
    //         'posts' => $posts,
    //         'asidePosts' => $asidePosts,
    //         'allPosts' => $allPosts,
    //         'provinces' => $provinces,
    //         'mainCategories' => $mainCategories,
    //         'priceRanges' => $priceRanges
    //     ]);
    // }

    public function index()
    {
        $mainCategories = MainCategory::withCount('posts')
            ->whereIn('id', [1, 2, 4,5])
            ->get();

        $provinces = Province::all();
        
        // ใช้ simplePaginate แทน paginate สำหรับ $asidePosts
        $asidePosts = Post::orderByDesc('is_ads')
            ->latest('updated_at')
            ->take(15)
            ->get();

        $priceRanges = PriceRange::all();
        
        // ใช้ simplePaginate แทน paginate สำหรับ $posts
        $posts = Post::orderByDesc('updated_at')->simplePaginate(14);

        return view('post.index', [
            'posts' => $posts,
            'asidePosts' => $asidePosts,
            'mainCategories' => $mainCategories,
            'provinces' => $provinces,
            'priceRanges' => $priceRanges
        ]);
    }

    public function cleanText($text)
    {
         $removePatterns = [
            '/ธุรกิจ/' => '',
            '/พื้นที่/' => '',
        ];
        return preg_replace(array_keys($removePatterns), array_values($removePatterns), $text);
    }

    public function generateLink($content,$provinceId,$amphurId,$subCategoryId)
    {
        $links = [];
        $provincePostInfo = PostInfo::whereBetween('created_at', [Carbon::now()->subDays(90), Carbon::now()])
            ->where('province_id',$provinceId)
            ->inRandomOrder()
            ->first();
        if($provincePostInfo !== null){
            $links[] = [
                "text" => Province::find($provinceId)->name,
                "link" => url('/'). '/'. $provincePostInfo->post->slug
            ];
        }    

        $amphurPostInfo = PostInfo::whereBetween('created_at', [Carbon::now()->subDays(90), Carbon::now()])
            ->where('amphur_id',$amphurId)
            ->inRandomOrder()
            ->first();
        if($amphurPostInfo !== null){
            $links[] = [
                "text" => Amphur::find($amphurId)->name,
                "link" => url('/'). '/'. $amphurPostInfo->post->slug
            ];
        }   

        $subCategory = SubCategory::find($subCategoryId);

        if($subCategory !== null){
            $subCategoryName = $this->cleanText($subCategory->name);
            $words = explode('/', $subCategoryName);
            foreach($words as $word)
            {
                $post = Post::whereBetween('created_at', [Carbon::now()->subDays(90), Carbon::now()])
                ->where('sub_category_id', $subCategoryId)
                ->inRandomOrder()
                ->first();
                if($post !== null){
                    $links[] = [
                        "text" => $word,
                        "link" => url('/'). '/'. $post->slug
                    ];
                }
                
            }
        }
        
        foreach ($links as $link) {
            $textToReplace = $link['text'];
            $replacement = "<a href='{$link['link']}'>$textToReplace</a>";
            $content = preg_replace('/' . preg_quote($textToReplace, '/') . '/', $replacement, $content, 1);
        }

        return $content;
    }

    public function view($slug)
    {
        $post = Post::where('slug',$slug)->get()->first();
        
        if($post !== null){
            $posts = Post::where('main_category_id',$post->main_category_id)
            ->where('id','<>',$post->id)
            ->orderByDesc('updated_at')
            ->paginate(4);

            $postView = PostView::where('post_id', $post->id)->first();
            $postView === null
                ? PostView::create(['post_id' => $post->id,'view' => 1])
                : $postView->update(['view' => $postView->view + 1]);
        }else{
            return response()->view('error.404', [], 404);
        }

        return view('post.detail',[
            'post' => $post,
            'posts' => $posts,
            'searchTerm' => null,
            'tag' => null
        ]);
    }

    public function search()
    {
        $mainCategoryIds = [];
        $categories = request()->input('categories', null);
        if($categories !== null){
          $mainCategoryIds = request()->input('categories', []);
        }
        
        $provinceId = null;
        $amphurId = null;
        $queryInput = null;
        $mainCategoryId = null;
        $subCategoryId = null;
        $subMinorCategoryId = null;
        $minPrice = 0;
        $maxPrice = 0;

        $priceId = request()->input('price', null);

        if($priceId !== null){
            $priceRange = PriceRange::find($priceId);
            $minPrice = $priceRange->min_price;
            $maxPrice = $priceRange->max_price;
        }

        $provinceInput = request()->input('province', null);
        $amphurInput = request()->input('amphur', null);
        $mainCategoryInput = request()->input('mainCategory', null);
        $subCategoryInput = request()->input('subCategory', null);
        $subMinorCategoryInput = request()->input('subMinorCategory', null);
        $queryInput = request()->input('queryInput', null);
        $nearPlace = request()->input('nearPlace', null);

        $provinceId = optional(Province::where('name', $provinceInput)->first())->id;
        $amphurId = optional(Amphur::where('name', $amphurInput)->first())->id;
        $mainCategoryId = optional(MainCategory::where('name', urldecode($mainCategoryInput))->first())->id;
        $subCategoryId = optional(SubCategory::where('name', urldecode($subCategoryInput))->first())->id;
        $subMinorCategoryId = optional(SubMinorCategory::where('name', urldecode($subMinorCategoryInput))->first())->id;
       
        $posts = Post::where(function ($query) use ($queryInput, $mainCategoryId, $subCategoryId, $subMinorCategoryId, $provinceId, $amphurId, $categories, $mainCategoryIds, $priceId, $minPrice, $maxPrice,$nearPlace) {
            $query->when($queryInput, function ($query, $input) {
                return $query->where('title', 'like', '%' . $input . '%')
                    ->where('description', 'like', '%' . $input . '%');
                })
                ->when($mainCategoryId, function ($query, $categoryId) {
                    return $query->where('main_category_id', $categoryId);
                })
                ->when($categories, function ($query, $mainCategoryIds) {
                    return $query->whereIn('main_category_id', $mainCategoryIds);
                })
                ->when($subCategoryId, function ($query, $subCategoryId) {
                    return $query->where('sub_category_id', $subCategoryId);
                })
                ->when($subMinorCategoryId, function ($query, $subMinorCategoryId) {
                    return $query->where('sub_minor_category_id', $subMinorCategoryId);
                })
                ->when($priceId, function ($query) use ($minPrice, $maxPrice) {
                    return $query->where('price', '>=', $minPrice)->where('price', '<=', $maxPrice);
                })
                ->when($provinceId || $amphurId, function ($query) use ($provinceId, $amphurId) {
                    return $query->whereHas('postInfo', function ($query) use ($provinceId, $amphurId) {
                        $query->when($provinceId, function ($query, $province) {
                            return $query->where('province_id', $province);
                        })
                            ->when($amphurId, function ($query, $amphur) {
                                return $query->where('amphur_id', $amphur);
                            });
                    });
                })
                ->when($nearPlace, function ($query) use ($nearPlace) {
                    return $query->whereHas('postNearPlace', function ($query) use ($nearPlace) {
                        return $query->where('name', $nearPlace);
                    });
                });
            })
            ->orderByDesc('updated_at')
            ->simplePaginate(14);

    $provinces = Province::all();
    // $mainCategories = MainCategory::whereIn('id', [1, 2, 4,5])->get();
    $mainCategories = MainCategory::whereIn('id', [1, 2, 4,5])->withCount('posts')->get();
    $asidePosts = Post::orderByDesc('is_ads')
                ->latest('updated_at')
                ->take(15)
                ->get();

    $priceRanges = PriceRange::all();

    return view('post.index',[
            'posts' => $posts,
            'asidePosts' => $asidePosts,
            'provinces' => $provinces,
            'mainCategories' => $mainCategories,
            'priceRanges' => $priceRanges
        ]);
    }

    // public function testPostToFacebook()
    // {
    //     $accessToken = env('FACEBOOK_PAGE_ACCESS_TOKEN');
    //     $client = new Client();

    //     $link = 'https://sengbiz.com/';
    //     $message = 'test';
    //     $url = "https://graph.facebook.com/231648233358043/feed?message=".$message."&link=".$link."&access_token=".$accessToken;
    //     $response = $client->request('POST',$url);

    //     if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
    //         $responseData = json_decode($response->getBody(), true);
    //         $idValue = $responseData['id'];
    //         dd($idValue);
    //     }
    //     return json_decode($response->getBody(), true);
    // }

    public function postToFacebook()
    {
        $accessToken = env('FACEBOOK_PAGE_ACCESS_TOKEN');
        $client = new Client();

        $link = 'https://sengbiz.com/';
        $url = "https://graph.facebook.com/231648233358043/feed?message=test&link=".$link."&access_token=".$accessToken;
        $response = $client->request('POST',$url);

        return json_decode($response->getBody(), true);
    }

    public function contactStore(Request $request): RedirectResponse
    {

        $validator = $this->validateFormData($request);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $postId = $request->post_id;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;

        ContactMessage::create([
            'post_id' => $postId,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
        ]);
  
        return redirect()->back()->with(['success' => 'ส่งข้อความสำเร็จ']);
    }

    function validateFormData($request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);
        
        return $validator;
    } 

    public function makeThumbnail()
    {
        $post = Post::whereNull('thumb_nail')->get()->first();
        $postImage = PostImage::where('post_id',$post->id)->get()->first();// $post->postImages->first();
        if($postImage !== null){
            $fname = $postImage->path;
            $filename = public_path($fname);
            $manager = new ImageManager(new Driver());
            $image = $manager->read($filename);

            $image->scale(width: 350);
            $image->cover(350, 200);

            $newFileName = str_replace('.webp', '-thumbnail.webp', $fname);

            $output = public_path($newFileName);
            $image->toWebp(60)->save($output);

            $post->update([
                'thumb_nail' => $newFileName
            ]);
        }
    }
         
    
}
