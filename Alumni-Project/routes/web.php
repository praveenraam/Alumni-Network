<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Authentication Pages
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/adminAuth',function(){
    return view('auth.admin-auth');
});
Route::get('/profile',function(){
    return view('profile.timeline');
});
Route::get('/mentee',function(){
    return view('mentee.mentee');
});
Route::get('/tasks',function(){
    return view('mentee.viewTask');
});
Route::get('AlumniTask',function(){
    return view('mentee.createTasks');
});