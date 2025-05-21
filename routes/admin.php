<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/login', function () {
    return view('admin.auth.login');
})->name('admin.login');

// --------------------------

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/blogs', function () {
    return view('admin.blogs.index');
})->name('admin.blogs.index');

Route::get('/admin/blogs/create', function () {
    return view('admin.blogs.create');
})->name('admin.blogs.create');

Route::get('/admin/blogs/{id}/edit', function ($id) {
    return view('admin.blogs.edit', ['id' => $id]);
})->name('admin.blogs.edit');

Route::delete('/admin/blogs/{id}', function ($id) {
    // Simulate delete logic (replace later)
    return redirect()->route('admin.blogs.index')->with('message', 'Blog deleted');
})->name('admin.blogs.delete');

// -----------------------

Route::get('/admin/users', function () {
    return view('admin.users.index');
})->name('admin.users.index');

Route::delete('/admin/users/{id}', function ($id) {
    return redirect()->route('admin.users.index')->with('message', 'User deleted');
})->name('admin.users.delete');

Route::get('/admin/users/{id}/edit', function ($id) {
    return view('admin.users.edit', ['id' => $id]);
})->name('admin.users.edit');

Route::put('/admin/users/{id}', function ($id) {
    // Normally you'd update the user in DB here
    return redirect()->route('admin.users.index')->with('message', 'User updated successfully!');
})->name('admin.users.update');
