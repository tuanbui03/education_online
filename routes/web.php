<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

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










Route::get('admin/login', function () {
    return view('admin/login');
})->name('login');

Route::get('admin/index', function () {
    return view('admin/index');
})->name('index');

Route::get('admin/view_teacher', function () {
    return view('admin/view_teacher');
})->name('view_teacher');

Route::get('admin/view_courses', function () {
    return view('admin/view_courses');
})->name('view_courses');

Route::get('admin/view_user', function () {
    return view('admin/view_user');
})->name('view_user');

Route::get('admin/view_playlist', function () {
    return view('admin/view_playlist');
})->name('view_playlist');


Route::get('admin/update_teacher', function () {
    return view('admin/update_teacher');
})->name('update_teacher');

Route::get('admin/update_courses', function () {
    return view('admin/update_courses');
})->name('update_courses');

Route::get('admin/update_user', function () {
    return view('admin/update_user');
})->name('update_user');

Route::get('admin/update_playlist', function () {
    return view('admin/update_playlist');
})->name('update_playlist');




Route::get('admin/view_teacher', function () {
    return view('admin/view_teacher');
})->name('delete_teacher');

Route::get('admin/delete_courses', function () {
    return view('admin/delete_courses');
})->name('delete_courses');

Route::get('admin/delete_user', function () {
    return view('admin/delete_user');
})->name('delete_user');

Route::get('admin/delete_playlist', function () {
    return view('admin/delete_playlist');
})->name('delete_playlist');



Route::get('admin/create_teacher', function () {
    return view('admin/create_teacher');
})->name('create_teacher');

Route::get('admin/create_playlist', function () {
    return view('admin/create_playlist');
})->name('create_playlist');

Route::get('admin/create_user', function () {
    return view('admin/create_user');
})->name('create_user');

Route::get('admin/create_courses', function () {
    return view('admin/create_courses');
})->name('create_courses');