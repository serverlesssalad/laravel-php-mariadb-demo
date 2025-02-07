<?php

// app/Http/Controllers/HealthController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function checkHealth()
    {
        return response()->json(['status' => 'healthy']);
    }
}
