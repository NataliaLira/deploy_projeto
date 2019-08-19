<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacidadeController extends Controller
{
    public function privacidade(Request $request) {
        if($request->isMethod('GET')){
            return view('privacidade');
        }

    }
}
