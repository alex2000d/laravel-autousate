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
    
    public function show($slug)
    {
        $auto = Auto::with('optionals')->where('slug', $slug)->first();

        if($auto){
            return response()->json([
                'success' => true,
                'results' => $auto
            ]);
        }

        return response()->json([
            'success' => false
        ]);
    }
}
