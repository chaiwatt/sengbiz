<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class SiteMapController extends Controller
{
    public function index(): Response
    {
        // $posts = Post::latest()->get();

        // return response()->view('sitemap',[
        //     'posts' =>$posts
        // ])->header('Content-Type','text/xml');
        $posts = Post::latest()->orderByDesc('updated_at')->get();

        return response()->view('sitemap', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
    }
}
