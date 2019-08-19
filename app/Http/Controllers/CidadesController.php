<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cidade;

class CidadesController extends Controller
{
    public function obterJson(Request $request) {
        if($request->isMethod('GET')){
            return view('cidades');
        }
    }

    public function addCidade(Request $request) {
        if($request->isMethod('GET')){
            return view('add-cidade');
        }
    }

    public function cadastrarCidade(Request $request){

        $cidade = new cidade();
        $cidade->cidade = strtoupper($request->cidade);
        $cidade->imagem = 'https://dummyimage.com/75x76/b8b8b8/fff/?text='.$request->cidade;

        if($request->hasfile('imagem'))
        {
            $file = $request->file('imagem');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/cidades/', $filename);
            $cidade->imagem = $filename;
        }
        $cidade->save();

        return response()->json(['cidade' => "Cidade cadastrada com sucesso!"]);
    }
}
