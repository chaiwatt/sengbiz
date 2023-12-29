<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScraperController;

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

Route::get('/', function () {
    return view('welcome');
});

 Route::get('scrap', [ScraperController::class, 'scrap'])->name('scrap');
 Route::get('scrap-list', [ScraperController::class, 'scrapList'])->name('scrap-list');

 