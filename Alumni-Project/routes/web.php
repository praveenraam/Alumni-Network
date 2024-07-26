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
    //Index for Admin
    Route::get('/admin', [AdminLoginController::class, 'index']);

    // Admin view, create for all alumni 
    Route::get('/admin/alumni', [AlumniController::class, 'ViewList'])->name('admin.alumni.index');
    Route::get('/admin/alumni/create', [AlumniController::class, 'create'])->name('admin.alumni.create');
    Route::post('/admin/alumni/store', [AlumniController::class, 'store'])->name('admin.alumni.store');

    // Admin view sepatate Alumni profile
    Route::get('/admin/alumni/profile/{id}',[AlumniController::class,'profile']);

    // Admin everybody's details and seperate profiles : students
    Route::get('/admin/students',[StudentController::class,'ViewList']);
    Route::get('/admin/students/profile/{id}',[StudentController::class,'profile']);
});

Route::middleware(['auth:alumni'])->group(function () {
    // Index for Alumni
    Route::get('/alumni',[AlumniController::class, 'index'])->name('alumni.index');

    // View everybody's details and seperate profiles : alumni
    Route::get('/alumni/alumni',[AlumniController::class,'ViewList']);
    Route::get('/alumni/alumni/profile/{id}',[AlumniController::class,'profile'])->name('alumni.profile');

    // Update details
    Route::get('/alumni/settings/{id}',[AlumniController::class,'settings'])->name('alumni.settings');
    Route::post('/alumni/settings/update/{id}', [AlumniController::class, 'update'])->name('alumni.update');

    //View everybody's details and Students profile
    Route::get('/alumni/students',[StudentController::class,'ViewList']);
    Route::get('/alumni/students/profile/{id}',[StudentController::class,'profile']);

});

Route::middleware(['auth:student'])->group(function () {
    // Index for Student
    Route::get('/student',[StudentController::class,'index'])->name('student.index');

    // View seperate profile
    Route::get('/student/students/profile/{id}',[StudentController::class,'profile'])->name('student.profile');

    // Update details
    Route::get('/student/settings/{id}',[StudentController::class,'settings'])->name('student.settings');
    Route::post('/student/settings/update/{id}', [StudentController::class, 'update'])->name('student.update');

    // View everybody's details and seperate profiles : alumni
    Route::get('student/alumni',[AlumniController::class,'ViewList']);
    Route::get('/student/alumni/profile/{id}',[AlumniController::class,'profile']);

    // View Student profile
    Route::get('/student/students/profile/{id}',[StudentController::class,'profile']);

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