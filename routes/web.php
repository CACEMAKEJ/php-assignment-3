<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/coaching', 'coaching.coaching');
Route::view('/supplements', 'supplements.supplements');

Route::post('/posts/{id}/likes', 'PostController@like')->name('posts.likes');
Route::post('/posts/{id}/dislikes', 'PostController@dislike')->name('posts.dislikes');

