<?php

use Illuminate\Support\Facades\Route;

/*
 * Home Page Route-s
 */
Route::get('/', function () {
    return view('home');
});

/*
 * Laptops Route-s
 */
Route::get('/laptops', function() {
    return view('laptops');
});

/*
 * Posts Route-s /categories
 */
Route::get('/posts', function() {
    return view('posts');
});

Route::get('/categories', function() {
    return view('categories');
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
