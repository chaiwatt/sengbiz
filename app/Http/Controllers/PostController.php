<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(20);
        return view('post.index',[
            'posts' => $posts,
            'searchTerm' => null,
            'tag' => null
        ]);
    }
    public function view($slug)
    {
        $posts = Post::paginate(20);
        return view('post.view',[
            'posts' => $posts,
            'searchTerm' => null,
            'tag' => null
        ]);
    }
}