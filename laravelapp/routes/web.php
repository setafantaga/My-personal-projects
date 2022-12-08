<?php

use App\Models\Album;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


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

// Welcome route
Route::get('/', function () {
    return view('welcome');
});

//  Album routes 
Route::get('albums', function() {
    return view('albums', [
        'albums' => Album::all()
    ]);
});
Route::get('albums/{album:slug}', function(Album $album) {
    return view('album', [
        'album' => $album
    ]);
});

//  Comments routes
// Route::post('{album:slug}', [CommentController::class, 'store'])->name('commente.store');
Route::post('/comment/store', 'App\Http\Controllers\CommentController@store')->name('comment.store');

// Search Route
Route::get('search', 'App\Http\Controllers\SearchController@search')->name('search');

// About route
Route::get('about', function() {
    return view('about');
});

// Contact admin routes
Route::get('contact', [ContactController::class, 'contact'])->name('contact');
Route::post('contact', [ContactController::class, 'sendEmail'])->name('contact.store');

// Authentication routes
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('session', [SessionController::class, 'create'])->middleware('guest');
Route::post('session', [SessionController::class, 'store'])->middleware('guest');
Route::get('logout', [SessionController::class, 'logout'])->middleware('auth'); 

// AdminSection routes
Route::resource('admin/adminAlbumSection', AdminController::class);
Route::resource('admin/adminUserSection', UserController::class);