<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\Province;
use App\Models\PriceRange;
use App\Models\MainCategory;
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
            $provinces = Province::all();
            $mainCategories = MainCategory::all();
            $asidePosts = Post::orderByDesc('updated_at')->paginate(21);

            $asidePosts = Post::orderByDesc('is_ads')
                ->latest('updated_at')
                ->paginate(21);

            $allPosts = Post::all();
            $priceRanges = PriceRange::all();
            $view->with([
                'asidePosts' => $asidePosts,
                'allPosts' => $allPosts,
                'provinces' => $provinces,
                'mainCategories' => $mainCategories,
                'priceRanges' => $priceRanges
            ]);
        });

         View::composer('layouts.landing', function ($view) {
            $provinces = Province::all();
            $mainCategories = MainCategory::all();
            $view->with([
                'provinces' => $provinces,
                'mainCategories' => $mainCategories,
            ]);
        });

        View::composer('layouts.view', function ($view) {
            $mainCategories = MainCategory::all();
            $view->with([
                'mainCategories' => $mainCategories,
            ]);
        });
    }
}
