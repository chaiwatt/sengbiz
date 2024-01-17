<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderByDesc('updated_at')->paginate(20);
        return view('post.index',[
            'posts' => $posts,
            'searchTerm' => null,
            'tag' => null
        ]);
    }
    public function view($slug)
    {
        $posts = Post::paginate(4);
        $post = Post::where('slug',$slug)->first();
        return view('post.view',[
            'post' => $post,
            'posts' => $posts,
            'searchTerm' => null,
            'tag' => null
        ]);
    }
}
