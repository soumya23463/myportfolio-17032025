<?php

use Illuminate\Support\Facades\Route;
//students
Route::get('/', function () {
    return view('welcome');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/projects', function () {
    return view('courses');
});
Route::get('/blogs', function () {
    return view('courses');
});

Route::get('/contacts', function () {
    return view('courses');
});

//students
Route::get('/student/login', function () {
    return view('courses');
});
Route::get('/student/register', functaction: ion () {
    return view('courses');
});
//dashboard
Route::get('/dashboard/', function () {
    return view('courses');
});

Route::get('/dashboard/courses', function () {
    return view('courses');
});
Route::get('/dashboard/projects', function () {
    return view('courses');
});
Route::get('/dashboard/blogs', function () {
    return view('courses');
});
Route::get('/dashboard/setting', function () {
    return view('courses');
});