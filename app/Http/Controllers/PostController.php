<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Amphur;
use App\Models\PostView;
use App\Models\Province;
use App\Models\PriceRange;
use App\Models\SubCategory;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use App\Models\SubMinorCategory;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderByDesc('updated_at')->paginate(20);
        return view('post.index',[
            'posts' => $posts
        ]);
    }
    public function view($slug)
    {
        
        $post = Post::where('slug',$slug)->first();

        if($post !== null){
            $posts = Post::where('main_category_id',$post->main_category_id)
            ->where('id','<>',$post->id)
            ->orderByDesc('updated_at')
            ->paginate(4);

            $postView = PostView::where('post_id', $post->id)->first();
            $postView === null
                ? PostView::create(['post_id' => $post->id,'view' => 1])
                : $postView->update(['view' => $postView->view + 1]);
        }

        return view('post.view',[
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

        $provinceId = optional(Province::where('name', $provinceInput)->first())->id;
        $amphurId = optional(Amphur::where('name', $amphurInput)->first())->id;
        $mainCategoryId = optional(MainCategory::where('name', urldecode($mainCategoryInput))->first())->id;
        $subCategoryId = optional(SubCategory::where('name', urldecode($subCategoryInput))->first())->id;
        $subMinorCategoryId = optional(SubMinorCategory::where('name', urldecode($subMinorCategoryInput))->first())->id;
       
        $posts = Post::where(function ($query) use ($queryInput, $mainCategoryId, $subCategoryId, $subMinorCategoryId, $provinceId, $amphurId, $categories, $mainCategoryIds, $priceId, $minPrice, $maxPrice) {
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
                });
            })
            ->orderByDesc('updated_at')
            ->paginate(20);

    return view('post.index',[
            'posts' => $posts
        ]);
    }
}
