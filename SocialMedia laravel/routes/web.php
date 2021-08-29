<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserPostController;

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


Route::get('/', function () {
    return view('home');
});

Route::get('/post', [PostController::class, 'index'])->name("post");
//Route::get('/post/{post}', [PostController::class, 'show'])->name("post.show");
Route::post('/post', [PostController::class, 'store']); 
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name("post.destroy");

Route::get('/users/{user:name}/posts', [UserPostController::class, 'index'])->name("users.posts"); 


Route::get('/register', [RegisterController::class, 'index'])->name("register"); 
Route::post('/register', [RegisterController::class, 'store']); 

Route::get('/login', [LoginController::class, 'index'])->name("login"); 
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'logout'])->name("logout"); 




Route::post('/post/{post}/likes', [PostLikeController::class, 'store'])->name("post.likes");
Route::delete('/post/{post}/likes', [PostLikeController::class, 'destroy'])->name("post.likes");