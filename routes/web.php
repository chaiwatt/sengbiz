<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ScraperController;
use App\Http\Controllers\SiteMapController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardApiController;
use App\Http\Controllers\GoogleIndexingController;
use App\Http\Controllers\ImageIntervensionController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('sitemap.xml', [SiteMapController::class, 'index'])->name('sitemap');
Route::get('scrap', [ScraperController::class, 'scrap'])->name('scrap');
Route::get('scrap-list', [ScraperController::class, 'scrapList'])->name('scrap-list');

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('test', [ImageIntervensionController::class, 'test'])->name('test');



// Route::group(['prefix' => ''], function () {
//     Route::get('', [PostController::class, 'index'])->name('index');
//     Route::get('/{slug}', [PostController::class, 'view'])->name('blog.view');


// Route::get('sitemap.xml', [SiteMapController::class, 'index'])->name('sitemap');

// Route::get('', [PostController::class, 'index'])->name('index');
// Route::get('/{slug}', [PostController::class, 'view'])->name('view');
Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('home', [DashboardController::class, 'index'])->name('home');
        Route::get('create', [DashboardController::class, 'create'])->name('dashboard.create');
        Route::post('upload', [DashboardController::class, 'upload'])->name('dashboard.upload');
        Route::post('update', [DashboardController::class, 'update'])->name('dashboard.update');
        Route::post('store', [DashboardController::class, 'store'])->name('dashboard.store');
        Route::get('view/{id}', [DashboardController::class, 'view'])->name('dashboard.view');
        Route::get('profile', [DashboardController::class, 'profile'])->name('dashboard.profile');
        Route::group(['prefix' => 'api'], function () {
            Route::post('sub-category', [DashboardApiController::class, 'subCategory'])->name('dashboard.api.sub-category');
            Route::post('sub-minor-category', [DashboardApiController::class, 'subMinorCategory'])->name('dashboard.api.sub-minor-category');
            Route::post('amphur', [DashboardApiController::class, 'amphur'])->name('dashboard.api.amphur');
            Route::post('delete-image', [DashboardApiController::class, 'deleteImage'])->name('dashboard.api.delete-image');
            Route::post('delete-post-image', [DashboardApiController::class, 'deletePostImage'])->name('dashboard.api.delete-post-image');
            Route::post('post-images', [DashboardApiController::class, 'postImage'])->name('dashboard.api.post-images');
        });
    });
});
// Route::get('test-post-to-facebook', [PostController::class, 'testPostToFacebook'])->name('test-post-to-facebook');
Route::get('indexing', [GoogleIndexingController::class, 'index'])->name('indexing');
Route::get('search', [PostController::class, 'search'])->name('search');
Route::get('/{slug}', [PostController::class, 'view'])->name('view');
Route::get('', [PostController::class, 'index'])->name('index');
Route::post('contact-store', [PostController::class, 'contactStore'])->name('contact-store');














