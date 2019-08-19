@extends('layoutsloja.app')

@section('content')

<div class="site-wrap">


    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-0"><a href="/home">Home</a> <span class="mx-2 mb-0">/</span>
                    <a href="/loja">Loja</a><span class="mx-2 mb-0">/</span>
                    <strong class="text-black">Compra finalizada</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5 tamanhoFinalizada">
                    <span class="icon-check_circle display-3 text-success"></span>
                    <h2 class="display-3 text-black">Obrigado!</h2>
                    <p class="lead mb-5">Sua compra foi realizada com sucesso.</p>
                    <p><a href="/loja" class="btn btn-sm btn-primary">VOLTE A COMPRAR!</a></p>
                </div>
            </div>
        </div>
    </div>

    @endsection
