<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auto;

class AutoController extends Controller
{
    public function index(){
        $autos = Auto::all();
        return response()->json([
            'success' => true,
            'results' => $autos
        ]);

    }
}
