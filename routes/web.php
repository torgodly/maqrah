<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//blog
Route::get('/blog', function () {
    return view('blog.index');
});

Route::get('/blog/{post}', function ($post) {
    return view('blog.show', ['post' => $post]);
});
