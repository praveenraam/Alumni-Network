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


