<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

// Route Home
Route::get('/', [PageController::class, 'index']);

// Route Products
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        echo "Halaman dengan katagori marbel-edu-games";
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        echo "Halaman dengan katagori marbel-and-friends-kids-games";
    });
    Route::get('/riri-story-books', function () {
        echo "Halaman dengan katagori riri-story-books";
    });
    Route::get('/kolak-kids-songs', function () {
        echo "Halaman dengan katagori kolak-kids-songs";
    });
});

Route::get('/news/{news?}', [PageController::class, 'news']);

Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        echo "Halaman program karir";
    });
    Route::get('/magang', function () {
        echo "halaman program magang";
    });
    Route::get('/kunjungan-industri', function () {
        echo "halaman program kunjungan industri";
    });
});

Route::get('/about-us', [PageController::class, 'about']);

Route::resource('contact-us', ContactController::class);
