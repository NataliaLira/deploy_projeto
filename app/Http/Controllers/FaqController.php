<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function faq(Request $request) {
        if($request->isMethod('GET')){
            return view('faq');
        }

    }
}
