<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('layouts.partial.sidebar', function ($view) {
            $asidePosts = Post::paginate(20);
            $view->with('asidePosts', $asidePosts);
        });
    }
}
