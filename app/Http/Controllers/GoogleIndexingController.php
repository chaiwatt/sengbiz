<?php

namespace App\Http\Controllers;

use Google_Client;
use Google\Service;
use App\Models\Post;
use Google\Http\Batch;
use Google\Service\Indexing;
use Illuminate\Http\Request;
use Google\Service\Indexing\UrlNotification;

class GoogleIndexingController extends Controller
{
    public function index()
    {
        $posts = Post::where('title', 'like', '%รหัสทรัพย์%')->get();
        // dd($posts);
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
        $client = new Google_Client();
        
        $client->setAuthConfig(public_path('assets/json/service_account_1.json'));
        $client->addScope('https://www.googleapis.com/auth/indexing');

        // Get a Guzzle HTTP Client
        $httpClient = $client->authorize();
        $endpoint = 'https://indexing.googleapis.com/v3/urlNotifications:publish';

        $content = [
            'url' => 'https://sengbiz.com/ให้เช่าอาคาร-5-ชั้น-พื้นที่ใช้สอย-2200-ตรม.-บนพื้นที่',
            'type' => 'URL_UPDATED'
        ];

        $response = $httpClient->request('POST', $endpoint, [
                            'json' => $content,
                        ]);

        $status_code = $response->getStatusCode();

        return response()->json(['status_code' => $status_code]);

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
