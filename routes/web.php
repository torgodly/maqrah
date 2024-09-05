<?php

use App\Models\About;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $about = About::first();
    $posts = Post::orderByDesc('id')->get()->take(9);
    $testimonials = \App\Models\Testimonial::all();
    $Team = \App\Models\Team::all();
    $fqas = \App\Models\FQA::all();
    $finishing = Tag::where('type', 'ختمات')->get();
    $competitions = Tag::where('type', 'مسابقات')->get();
    $lessons = Tag::where('type', 'دروس')->get();
    $camps = Tag::where('type', 'مخيمات')->get();
    return view('welcome', compact('about', 'posts', 'testimonials', 'Team', 'fqas', 'finishing', 'competitions', 'lessons', 'camps'));
});

//blog
Route::get('/blog/{tag}', function (Tag $tag) {
    $posts = $tag->posts;
    return view('blog.index', compact('posts', 'tag'));
})->name('blog.index');


Route::get('/post/{post}', function (Post $post) {
    $tag = $post->tag;
    $posts = $tag->posts;
    $tags = Tag::all();
    return view('blog.show', compact('post', 'posts', 'tag', 'tags'));
})->name('post.show');


//post contact us
Route::post('/contact', function () {

    $validator =  request()->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    \App\Models\Contact::create($validator);
    return redirect()->back()->with('success', 'تم إرسال رسالتك. شكرًا لك!')->withFragment('contact');
})->name('contact.submit');
