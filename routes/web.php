<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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


// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  

Route::get('/', function () {
    return view('index');
});

// auth
Route::view('/login', 'auth.login')->middleware('guest');

Route::view('/register', 'auth.register')->middleware('guest');

Route::controller(AuthController::class)->group(function() {
    Route::post('/login', 'login')->name('login')->middleware('guest');

    Route::post('/register', 'register')->middleware('guest');

    Route::post('/logout', 'logout')->middleware('auth');
});


Route::controller(PostController::class)->group(function() {
    Route::get('/posts/create', 'create')->middleware('auth');

    Route::get('/posts/{id}', 'show');

    Route::post('/posts/create', 'store')->middleware('auth');
}); 