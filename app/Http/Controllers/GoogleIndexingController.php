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
}
