<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PostController;

Route::get('/', function () {
    return redirect()->route('posts.index');
});

Route::resource('posts', PostController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\PostController::class, 'index'])->name('home');
