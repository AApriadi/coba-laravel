<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Route::view('/','welcome');
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "img" => "home-bg.jpg"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "img" => "about-bg.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'blog']);

//single blog post page
Route::get('/posts/{post:slug}', [PostController::class, 'post']);

//categories
Route::get('/categories', function () {
    return view('categories', [
        'title' => "Post Categories",
        'categories' => Category::all(),
        'img' => "category-bg.jpg"
    ]);
});

//authors
Route::get('/authors', function () {
    return view('authors', [
        'title' => "Post Authors",
        'users' => User::all(),
        'img' => "user-bg.jpg"
    ]);
});

Route::get('/contact', [ContactController::class, 'contact']);

Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');
