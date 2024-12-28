<?php

use App\Http\Controllers\Api\Auth\AlumniLoginApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DemoCheck;

Route::get('check-status', [DemoCheck::class, 'checkApiStatus']);

// Alumni Login
Route::post('/login', [AlumniLoginApiController::class, 'login']);

Route::prefix('alumni')->middleware('auth:sanctum')->group(function () {
    Route::post('/updatePassword', [AlumniLoginApiController::class, 'updatePassword']);
});