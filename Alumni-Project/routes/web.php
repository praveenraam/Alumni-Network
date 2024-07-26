<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\AlumniLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\StudentLoginController;

Route::get('/admin/login', [AdminLoginController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login']);

Route::get('/login',[AlumniLoginController::class,'showLoginForm'])->name('alumni.login');
Route::post('/alumni/login',[AlumniLoginController::class,'login']);
Route::post('/alumni/logout',[AlumniLoginController::class,'logout'])->name('alumni.logout');

Route::get('/auth/google', [StudentLoginController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [StudentLoginController::class, 'handleGoogleCallback']);

Route::get('/404',function() {
    return view('404');
})->name('404');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin', [AdminLoginController::class, 'index']);

    Route::get('/admin/alumni', [AlumniController::class, 'AdminViewList'])->name('admin.alumni.index'); // Develop the page to view all the Alumni's list
    Route::get('/admin/alumni/create', [AlumniController::class, 'create'])->name('admin.alumni.create');
    Route::post('/admin/alumni/store', [AlumniController::class, 'store'])->name('admin.alumni.store');

});

Route::middleware(['auth:alumni'])->group(function () {
    Route::get('/alumni',[AlumniController::class, 'index'])->name('alumni.index');

    Route::get('/alumni/profile/{id}',[AlumniController::class,'profile'])->name('alumni.profile');

    Route::get('/alumni/settings/{id}',[AlumniController::class,'settings'])->name('alumni.settings');
    Route::post('/alumni/settings/update/{id}', [AlumniController::class, 'update'])->name('alumni.update');

});

Route::middleware(['auth:student'])->group(function () {
    Route::get('/student',[StudentController::class,'index'])->name('student.index');

    Route::get('/student/profile/{id}',[StudentController::class,'profile'])->name('student.profile');

    Route::get('/student/settings/{id}',[StudentController::class,'settings'])->name('student.settings');
    Route::post('/student/settings/update/{id}', [StudentController::class, 'update'])->name('student.update');

});



// Route::get('/', function () {
//     return view('index');
// });

// // Authentication Pages
// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');
// Route::get('/adminAuth',function(){
//     return view('auth.admin-auth');
// });
// Route::get('/profile',function(){
//     return view('profile.timeline');
// });
// Route::get('/mentee',function(){
//     return view('mentee.mentee');
// });
// Route::get('/tasks',function(){
//     return view('mentee.viewTask');
// });
// Route::get('AlumniTask',function(){
//     return view('mentee.createTasks');
// });