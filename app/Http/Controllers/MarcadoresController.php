<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcadoresController extends Controller
{
    public function marcadores(Request $request) {
        if($request->isMethod('GET')){
            return view('marcadores');
        }

    }
}
