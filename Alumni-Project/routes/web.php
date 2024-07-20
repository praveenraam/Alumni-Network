<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\Auth\AlumniLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [AdminLoginController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login']);

Route::get('/login',[AlumniLoginController::class,'showLoginForm'])->name('alumni.login');
Route::post('/alumni/login',[AlumniLoginController::class,'login']);
Route::post('/alumni/logout',[AlumniLoginController::class,'logout'])->name('alumni.logout');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin', [AdminLoginController::class, 'index']);

    Route::get('/admin/alumni', [AlumniController::class, 'index'])->name('admin.alumni.index');
    Route::get('/admin/alumni/create', [AlumniController::class, 'create'])->name('admin.alumni.create');
    Route::post('/admin/alumni/store', [AlumniController::class, 'store'])->name('admin.alumni.store');

});

Route::group(['middleware' => ['auth:alumni']], function () {
    Route::get('/alumni',function () {
        return view('index');
    })->name('alumni.index');
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