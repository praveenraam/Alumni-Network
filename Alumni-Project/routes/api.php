<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DemoCheck;

Route::get('check-status', [DemoCheck::class, 'checkApiStatus']);

