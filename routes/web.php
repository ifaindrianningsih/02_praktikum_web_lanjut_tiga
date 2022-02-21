<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [WelcomeController::class, 'home']) ;

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [WelcomeController::class, 'ct1']);
    Route::get('/marbel-and-friends-kids-games', [WelcomeController::class, 'ct2']);
    Route::get('/riri-story-books', [WelcomeController::class, 'ct3']);
    Route::get('/kolak-kids-songs', [WelcomeController::class, 'ct4']);
});

Route::get('/news', [WelcomeController::class, 'news']) ;
Route::get('/news/{text}', [WelcomeController::class, 'newstext']) ;

Route::prefix('program')->group(function () {
    Route::get('/karir', [WelcomeController::class, 'pro1']);
    Route::get('/magang', [WelcomeController::class, 'pro2']);
    Route::get('/kunjungan-industri', [WelcomeController::class, 'pro3']);
});

Route::get('/aboutus', function () {
    echo '<a href="https://www.educastudio.com/about-us">https://www.educastudio.com/about-us</a>';
});

Route::resource('contactus', ContactController::class) ;
