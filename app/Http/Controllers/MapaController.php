<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapaController extends Controller
{
    public function mapa(Request $request) {
        if($request->isMethod('GET')){
            return view('mapa');
        }

    }

}
