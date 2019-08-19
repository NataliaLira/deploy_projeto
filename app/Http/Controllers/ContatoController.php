<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request) {
        if($request->isMethod('GET')){
            return view('contato');
        }

    }
}
