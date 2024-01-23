<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Province;
use App\Models\PostPackage;
use App\Models\MainCategory;
use Illuminate\Http\Request;
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
        return view('dashboard.create',[
            'postPackages' =>$postPackages,
            'provinces' => $provinces,
            'mainCategories' => $mainCategories
        ]); 
    }

    public function upload(Request $request)
     {
        $image = $request->file('file');
        $originalName = $image->getClientOriginalName();
        $rawFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
        $image->move(public_path('images'),$originalName);
        $link = url('/images/'.$originalName );

        $response = Http::get($link);
        $content = $response->body();
        // dd($content);
        $fname = "images/" . $image->getClientOriginalName();
        $filename = public_path($fname);
        file_put_contents($filename, $content);
        $manager = new ImageManager(new Driver());
        $image = $manager->read($filename);
        $image->place(public_path("assets/images/logo.png"));
       
        $image->scale(width: 900);
       
        $fname = "images/{$rawFilename}.webp";
        $output = public_path($fname);
        $image->toWebp()->save($output);
        unlink($filename);
        return response()->json(['success'=>$originalName]);
    }
    public function store(Request $request)
    {
        // dd($request->filename);
    }

    public function profile()
    {
        $user = Auth::user();
        return view('dashboard.profile',[
            'user' =>$user
        ]); 
    }
}
