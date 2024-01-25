<?php

namespace App\Jobs;

use Google_Client;
use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class IndexingPost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $postId;
    protected $slug;

    public function __construct($postId,$slug)
    {
        $this->postId = $postId;
        $this->slug = $slug;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->indexing($this->postId,$this->slug);
    }

    public function indexing($postId,$slug)
    {
         $client = new Google_Client();
        
        // $client->setAuthConfig(public_path('assets/json/service_account_key_1.json'));
        // $client->setAuthConfig(public_path('assets/json/service_account_key.json'));

        $randomNumber = mt_rand(1, 7);
        $client->setAuthConfig(public_path("assets/json/service_account_key{$randomNumber}.json"));

        $client->addScope('https://www.googleapis.com/auth/indexing');

        $httpClient = $client->authorize();
        $endpoint = 'https://indexing.googleapis.com/v3/urlNotifications:publish';

        $content = [
            'url' => 'https://sengbiz.com/'.$slug,
            'type' => 'URL_UPDATED'
        ];

        $response = $httpClient->request('POST', $endpoint, [
                            'json' => $content,
                        ]);

        $statusCode = $response->getStatusCode();

        Post::find($postId)->update([
            'indexing_code' => $statusCode 
        ]);
    }
}
