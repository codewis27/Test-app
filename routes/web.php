<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Models\Posts;

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


Route::get('/', [PostsController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Agus Wisma",
        "email" => "aguswisma@gmail.com"
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        "title" => "Posts",

    ]);
});
Route::get('/posts/{slug}', [PostsController::class, 'show']);
