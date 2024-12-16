<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/playlist', function () {
    return view('playlist');
})->name('playlist');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/teacher_profile', function () {
    return view('teacher_profile');
})->name('teacher_profile');

Route::get('/teachers', function () {
    return view('teachers');
})->name('teachers');

Route::get('/update', function () {
    return view('update');
})->name('update');

Route::get('/watch_video', function () {
    return view('watch_video');
})->name('watch_video');
