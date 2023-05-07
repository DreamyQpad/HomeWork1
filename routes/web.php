<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;

use App\Models\Post;

/*
 * Home Page Route-s
 */
Route::get('/', function () {
    return view('home');
});

/*
 * Laptops Route-s
 */
Route::post("/add", [LaptopController::class, 'store']);

Route::get('/laptops', [LaptopController::class, 'show']);

/*
 * Posts Route-s /categories
 */
Route::get('/post', function () {
    return view('posts', [
        'posts' => Post::with('category')->get()
    ]);

});

Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories', function (){
    return view("categories");
});


/*
 * Gallery Page Route-s
 */
Route::get('/gallery', function() {
    return view('gallery');
});

/*
 * Contact Page Route-s
 */

Route::get('/contact', function() {
    return view('contact');
});
