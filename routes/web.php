<?php

use App\Models\About;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $about = About::first();
    return view('welcome', ['about' => $about]);
});

//blog
Route::get('/blog', function () {
    return view('blog.index');
});

Route::get('/blog/{post}', function ($post) {
    return view('blog.show', ['post' => $post]);
});
