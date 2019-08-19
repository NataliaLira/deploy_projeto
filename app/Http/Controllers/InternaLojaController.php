<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternaLojaController extends Controller
{
    public function interna(){
        return view('internaProduto');
    }
}
