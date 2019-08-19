<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function cadastro(Request $request) {
        if($request->isMethod('GET')){
            return view('cadastroUsuario');
        }

    }

    public function cadastrarUsuario(Request $request){
        $usuario = new Usuaario();
        $usuario->nome = $request->nome;
        $usuario->sobrenome = $request->sobrenome;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;
        $usuario->cep = $request->cep;
        $usuario->endereco = $request->endereco;
        $usuario->numero = $request->numero;
        $usuario->complemento = $request->complemento;
        $usuario->bairro = $request->bairro;
        $usuario->dataNascimento = $request->dataNascimento;
        $usuario->estado = $request->estado;
        $usuario->cidade = $request->cidade;
        $usuario->nivelUsuario = $request->nivelUsuario;
        $usuario->newsletter = $request->newsletter;
        $usuario->save();

        return response()->json(['usuario' => "Você foi cadastrado com sucesso!"]);
    }
}
