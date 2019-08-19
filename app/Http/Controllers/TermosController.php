<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermosController extends Controller
{
    public function termos(Request $request) {
        if($request->isMethod('GET')){
            return view('termos');
        }

    }
}
