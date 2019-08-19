<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LojaController extends Controller
{
    public function loja(Request $request) {
        if($request->isMethod('GET')){
            return view('loja');
        }

    }
}
