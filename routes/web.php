<?php

use Illuminate\Support\Facades\Route;

include('admin.php');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/blogs', function () {
    return view('blogs.index');
})->name('blogs.index');

Route::get('/blogs/{id}', function ($id) {
    return view('blogs.show', ['id' => $id]);
})->name('blogs.show');

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::get('register', function () {
    return view('auth.register');
})->name('register');
