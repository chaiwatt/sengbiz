<?php

namespace App\Jobs;

use App\Models\Post;
use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class FacebookPost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $postId;

    public function __construct($postId)
    {
        $this->postId = $postId;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $post = Post::find($this->postId);
        $this->postToFacebook($post);
    }

    public function postToFacebook($post)
    {
        $accessToken = env('FACEBOOK_PAGE_ACCESS_TOKEN');
        $facebookPageId = env('FACEBOOK_PAGE_ID');
        $client = new Client();

        $link = 'https://sengbiz.com/'.$post->slug;
        $url = "https://graph.facebook.com/".$facebookPageId."/feed?message=".$post->title."&link=".$link."&access_token=".$accessToken;
        $response = $client->request('POST',$url);

        return json_decode($response->getBody(), true);
    }
}
