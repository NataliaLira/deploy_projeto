@extends('layoutsloja.app')

@section('content')

<div class="site-wrap">


    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-0"><a href="/home">Home</a> <span class="mx-2 mb-0">/</span>
                    <a href="/loja">Loja</a><span class="mx-2 mb-0">/</span>
                    <strong class="text-black">Carrinho</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <form class="col-12 mt-5" method="post">
                    <div class="site-blocks-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Imagem</th>
                                    <th class="product-name">Produto</th>
                                    <th class="product-price">Preço</th>
                                    <th class="product-quantity">Quantidade</th>
                                    <th class="product-total">Total</th>
                                    <th class="product-remove">Remover</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail">
                                        <img src="images/cloth_1.jpg" alt="Image" class="img-fluid">
                                    </td>
                                    <td class="product-name">
                                        <h2 class="h5 text-black">Nome do produto</h2>
                                    </td>
                                    <td>Preco</td>
                                    <td>
                                        <div class="input-group mb-3" style="max-width: 120px;">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-primary js-btn-minus "
                                                    type="button">&minus;</button>
                                            </div>
                                            <input type="text" class="form-control text-center" value="1" placeholder=""
                                                aria-label="Example text with button addon"
                                                aria-describedby="button-addon1">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary js-btn-plus"
                                                    type="button">&plus;</button>
                                            </div>
                                        </div>

                                    </td>
                                    <td>Preco</td>
                                    <td><a href="#" class="btn btn-danger btn-sm">X</a></td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="row mb-5">

                        <div class="col-12">
                            <button class="btn btn-outline-primary btn-sm btn-block heightBotao">CONTINUAR COMPRANDO</button>
                        </div>
                    </div>

                </div>
                <div class="col-12 pl-5 mb-5">
                    <div class="row justify-content-end">
                        <div class="col-7">
                            <div class="row">
                                <div class="col-12 text-right border-bottom mb-5">
                                    <h3 class="text-black h4 text-uppercase">PREÇO TOTAL</h3>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <span class="text-black">Subtotal</span>
                                </div>
                                <div class="col-6 text-right">
                                    <strong class="text-black">$230.00</strong>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-6">
                                    <span class="text-black">Total</span>
                                </div>
                                <div class="col-6 text-right">
                                    <strong class="text-black">$230.00</strong>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-lg py-3 btn-block
                                    "onclick="window.location='/dadoscompra'">FINALIZAR COMPRA</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
