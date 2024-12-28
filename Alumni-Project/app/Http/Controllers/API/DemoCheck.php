<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoCheck extends Controller
{
    public function checkApiStatus()
    {
        return response()->json([
            'message' => 'API is working properly'
        ], 200);
    }
}
