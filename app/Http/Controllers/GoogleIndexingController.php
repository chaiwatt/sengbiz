<?php

namespace App\Http\Controllers;

use Google_Client;
use Google\Service;
use App\Models\Post;
use Google\Http\Batch;
use Google\Service\Indexing;
use Illuminate\Http\Request;
use Google\Service\Indexing\UrlNotification;
use Famdirksen\LaravelGoogleIndexing\LaravelGoogleIndexing;

class GoogleIndexingController extends Controller
{
    public function index()
    {
       $posts = Post::whereNull('indexing_code')->get();
       foreach($posts as $post)
       {
        echo 'https://sengbiz.com/' .($post->slug). '<br>';
       }
        // $client = new Google_Client();
        
        // $client->setAuthConfig(public_path('assets/json/service_account.json'));
        // $client->addScope('https://www.googleapis.com/auth/indexing');

        // // Get a Guzzle HTTP Client
        // $httpClient = $client->authorize();
        // $endpoint = 'https://indexing.googleapis.com/v3/urlNotifications:publish';

        // $urls = [
        //     'https://sengbiz.com/บ้านแฝด-หมู่บ้าน-ทรัพย์ธานี-5-คลอง-8',
        //     'https://sengbiz.com/เดอะ-นีช-ไอดี-พระราม2-เฟส-1ที่ตั้ง-ถ.พระราม',
        // ];
        // $content = [
        //     'url' => 'https://sengbiz.com/บ้านแฝด-หมู่บ้าน-ทรัพย์ธานี-5-คลอง-8',
        //     // 'url' => $urls,
        //     'type' => 'URL_UPDATED'
        // ];

        // $response = $httpClient->request('POST', $endpoint, [
        //                     'json' => $content,
        //                 ]);

        // $status_code = $response->getStatusCode();
        // dd($status_code);

        // return response()->json(['status_code' => $status_code]);

    }

    public function removeProperty()
    {
        $posts = Post::where('title', 'like', '%รหัสทรัพย์%')->get();
        foreach($posts as $post)
        {
            $editTitle = $this->removePropertyCode($post->title,"รหัสทรัพย์");
            $editSlug = $this->removePropertyCode($post->slug,"รหัสทรัพย์");
            $editDescription = $this->removePropertyCode($post->description,"รหัสทรัพย์");
            $editBody = $this->removePropertyCode($post->body,"รหัสทรัพย์");
            $post->update([
                'title' => $editTitle,
                'slug' => $editSlug,
                'description' => $editDescription,
                'body' => $editBody
            ]);
        }
        
        return;
    }

    public function removePropertyCode($text,$keyWord)
    {
        $start = mb_strpos($text, $keyWord);
        
        if ($start === false) {
            return $text;
        }

        $next_digit = $start + mb_strlen($keyWord);

        while (!is_numeric(mb_substr($text, $next_digit, 1, 'utf-8'))) {
            $next_digit++;
        }

        while (is_numeric(mb_substr($text, $next_digit, 1, 'utf-8'))) {
            $next_digit++;
        }

        $textToRemove = mb_substr($text, $start, $next_digit-$start, 'utf-8');
        $text = str_replace($textToRemove, '', $text);

        return $text;
    }
}
