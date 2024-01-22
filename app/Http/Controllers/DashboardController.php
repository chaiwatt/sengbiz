<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Province;
use App\Models\PostPackage;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('dashboard.create',[
            'postPackages' =>$postPackages,
            'provinces' => $provinces,
            'mainCategories' => $mainCategories
        ]); 
    }

    public function profile()
    {
        $user = Auth::user();
        return view('dashboard.profile',[
            'user' =>$user
        ]); 
    }
}
