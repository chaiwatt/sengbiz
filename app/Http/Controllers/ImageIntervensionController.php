<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImageIntervensionController extends Controller
{
   public function test()
    {
        $manager = new ImageManager(new Driver());

        // read image from URL
        $image = $manager->read('https://img.freepik.com/free-psd/cute-brown-white-dog-scene_23-2150179279.jpg');

        dd($image);

        // // resize image proportionally to 300px width
        // $image->scale(width: 300);

        // // insert watermark
        // $image->place('images/watermark.png');

        // // save modified image in new format
        // $image->toPng()->save('images/foo.png');
    }

}
