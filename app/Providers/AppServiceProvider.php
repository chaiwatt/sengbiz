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
            $asidePosts = Post::orderByDesc('updated_at')->paginate(21);
            $view->with(['asidePosts' => $asidePosts]);
        });
    }
}
