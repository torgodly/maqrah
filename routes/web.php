<?php

use App\Models\About;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $about = About::first();
    $posts = Post::all();
    return view('welcome', compact('about', 'posts'));
});

//blog
Route::get('/blog', function () {
    return view('blog.index');
});

Route::get('/blog/{post}', function (Post $post) {
    $posts = Post::all();
    return view('blog.show', compact('post', 'posts'));
})->name('blog.show');
