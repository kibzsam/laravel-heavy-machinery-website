<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('customer')->user();
    $posts=\App\Post::all();
    $posts->load('item','company');
    $count=$posts->count();
    return view('customer.home', compact('posts','count'));
})->name('home');

