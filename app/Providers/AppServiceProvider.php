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
         View::composer('layouts.main', function ($view) {
            $provinces = Province::all();
            $mainCategories = MainCategory::whereIn('id', [1, 2, 4,5])->get();
            $view->with([
                'provinces' => $provinces,
                'mainCategories' => $mainCategories,
            ]);
        });

        View::composer('layouts.view', function ($view) {
            // $mainCategories = MainCategory::all();
            $mainCategories = MainCategory::whereIn('id', [1, 2, 4,5])
            ->get();
            $view->with([
                'mainCategories' => $mainCategories,
            ]);
        });
    }
}
