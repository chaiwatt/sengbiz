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
            $image->scale(width: 900);

            // แปลงไฟล์เป็น WebP และบันทึก
            $webpFilename = "images/{$rawFilename}.webp";
            $output = public_path($webpFilename);
            $image->toWebp()->save($output);

            // ลบไฟล์ที่อัพโหลดและไฟล์ที่ดาวน์โหลดมา ยกเว้นไฟล์ .webp
            unlink($filename); // ลบไฟล์ที่อัพโหลด
            // unlink(public_path("images/$originalName")); // ลบไฟล์ที่ดาวน์โหลดมา

            return response()->json(['success' => $webpFilename]); // ส่งคืนชื่อไฟล์ .webp
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
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
