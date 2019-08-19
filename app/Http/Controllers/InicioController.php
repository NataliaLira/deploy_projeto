<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function inicio(Request $request) {
        if($request->isMethod('GET')){
            return view('inicio');
        }

    }
}
