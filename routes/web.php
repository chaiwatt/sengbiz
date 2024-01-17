<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScraperController;
use App\Http\Controllers\ImageIntervensionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteMapController;

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



Route::get('/{slug}', [PostController::class, 'view'])->name('view');
Route::get('', [PostController::class, 'index'])->name('index');








