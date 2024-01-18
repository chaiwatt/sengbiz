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
        $selectedMainCategoryId = null;
        $selectedSubCategoryId = null;
        $selectedSubMinorCategoryId = null;


        $provinceInput = request()->input('province', null);
        $amphurInput = request()->input('amphur', null);
        $selectedMainCategoryInput = request()->input('selectedMainCategory', null);
        $selectedSubCategoryInput = request()->input('selectedSubCategory', null);
        $selectedSubMinorCategoryInput = request()->input('selectedSubMinorCategory', null);
        $queryInput = request()->input('queryInput', null);
        
        if ($provinceInput  !== null){
            $provinceId = Province::where('name',$provinceInput)->first()->id;
        }
        if ($amphurInput  !== null){
            $amphurId = Amphur::where('name',$amphurInput)->first()->id;
        }
        if ($selectedMainCategoryInput  !== null){
            $selectedMainCategoryInput = urldecode($selectedMainCategoryInput);
            $selectedMainCategoryId = MainCategory::where('name',$selectedMainCategoryInput)->first()->id;
        }
        if ($selectedSubCategoryInput  !== null){
            $selectedSubCategoryInput = urldecode($selectedSubCategoryInput);
            $selectedSubCategoryId = SubCategory::where('name',$selectedSubCategoryInput)->first()->id;
        }
        if ($selectedSubMinorCategoryInput  !== null){
            // $selectedSubCategoryId = SubMinorCategory::where('name',$selectedSubMinorCategoryInput)->first()->id;
            $selectedSubMinorCategoryInput = urldecode($selectedSubMinorCategoryInput);
            $selectedSubMinorCategoryId = SubMinorCategory::where('name', $selectedSubMinorCategoryInput)->first()->id;

        }
       

        $posts = Post::where(function ($query) use ($queryInput, $selectedMainCategoryId, $selectedSubCategoryId, $selectedSubMinorCategoryId, $provinceId, $amphurId) {
            $query->when($queryInput, function ($query, $input) {
                return $query->where('title', 'like', '%' . $input . '%')
                            ->where('description', 'like', '%' . $input . '%');
            })
            ->when($selectedMainCategoryId, function ($query, $categoryId) {
                return $query->where('main_category_id', $categoryId);
            })
            ->when($selectedSubCategoryId, function ($query, $subCategoryId) {
                return $query->where('sub_category_id', $subCategoryId);
            })
            ->when($selectedSubMinorCategoryId, function ($query, $subMinorCategoryId) {
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
