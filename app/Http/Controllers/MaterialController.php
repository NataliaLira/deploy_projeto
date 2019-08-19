<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\material;

class MaterialController extends Controller
{
    public function addMaterial(Request $request) {
        if($request->isMethod('GET')){
            return view('add-material');
        }
    }

    public function cadastrarMaterial(Request $request){
        $material = new material();
        $material->tipoMaterial = $request->tipoMaterial;
        $material->save();

        return response()->json(['material' => "Material cadastrado com sucesso!"]);
    }
}
