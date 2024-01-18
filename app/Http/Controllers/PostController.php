<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Amphur;
use App\Models\MainCategory;
use App\Models\PostView;
use App\Models\Province;
use App\Models\SubCategory;
use App\Models\SubMinorCategory;
use Illuminate\Http\Request;

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
        $posts = Post::paginate(4);
        $post = Post::where('slug',$slug)->first();
        if($post !== null){
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
        $provinceId = null;
        $amphurId = null;
        $queryInput = null;
        $mainCategoryId = null;
        $subCategoryId = null;
        $subMinorCategoryId = null;


        $provinceInput = request()->input('province', null);
        $amphurInput = request()->input('amphur', null);
        $mainCategoryInput = request()->input('mainCategory', null);
        $subCategoryInput = request()->input('subCategory', null);
        $subMinorCategoryInput = request()->input('subMinorCategory', null);
        $queryInput = request()->input('queryInput', null);
        
        if ($provinceInput  !== null){
            $provinceId = Province::where('name',$provinceInput)->first()->id;
        }
        if ($amphurInput  !== null){
            $amphurId = Amphur::where('name',$amphurInput)->first()->id;
        }
        if ($mainCategoryInput  !== null){
            $mainCategoryInput = urldecode($mainCategoryInput);
            $mainCategoryId = MainCategory::where('name',$mainCategoryInput)->first()->id;
        }
        if ($subCategoryInput  !== null){
            $subCategoryInput = urldecode($subCategoryInput);
            $subCategoryId = SubCategory::where('name',$subCategoryInput)->first()->id;
        }
        if ($subMinorCategoryInput  !== null){
            // $subCategoryId = SubMinorCategory::where('name',$subMinorCategoryInput)->first()->id;
            $subMinorCategoryInput = urldecode($subMinorCategoryInput);
            $subMinorCategoryId = SubMinorCategory::where('name', $subMinorCategoryInput)->first()->id;

        }
       

        $posts = Post::where(function ($query) use ($queryInput, $mainCategoryId, $subCategoryId, $subMinorCategoryId, $provinceId, $amphurId) {
            $query->when($queryInput, function ($query, $input) {
                return $query->where('title', 'like', '%' . $input . '%')
                            ->where('description', 'like', '%' . $input . '%');
            })
            ->when($mainCategoryId, function ($query, $categoryId) {
                return $query->where('main_category_id', $categoryId);
            })
            ->when($subCategoryId, function ($query, $subCategoryId) {
                return $query->where('sub_category_id', $subCategoryId);
            })
            ->when($subMinorCategoryId, function ($query, $subMinorCategoryId) {
                return $query->where('sub_minor_category_id', $subMinorCategoryId);
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
        ->orderByDesc('updated_at')->paginate(20);

    return view('post.index',[
            'posts' => $posts
        ]);
    }
}
