@extends('template')

@section('conteudo')

<?php

$root = 'http://localhost/projetoreeducarecicla/';
$foto = 'salveo%20planeta.png';

$title = $facebook_title = "Login";
$keywords = 'recicla,palavras,chave,separadas,por,virgula';
$description = $facebook_description = substr(strip_tags('<p>A Reeduca, por sua atitude empresarial e pela qualidade das relações que busca desenvolver com os diversos agentes que articula, expressa sua marca na identidade com pessoas e empresas que se comprometem a atuar de maneira efetiva na colaboração por um mundo mais saudável para se habitar, em respeito ao meio ambiente do qual fazem parte e responsabilidade para com as gerações por vir.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<body class="h-100">

    <div class="login-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6 mt-5 mb-5">
                    <div class="form-input-content ">
                        <div class="card">
                            <div class="card-body">
                                <div class="logo text-center">
                                    <a href="index.html">
                                        <img src="img/logologin.png" alt="">
                                    </a>
                                </div>
                                <h4 class="text-center mt-4 login-form ">Faça o login na sua conta</h4>
                                <form class="mt-5 mb-5 login-form-text">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Senha</label>
                                        <input type="password" class="form-control" placeholder="Senha">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="form-check p-l-0">
                                                <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                <label class="form-check-label" for="basic_checkbox_1">Manter conectado</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 text-right"><a href="javascript:void()">Esqueceu a senha?</a>
                                        </div>
                                    </div>
                                    <div class="text-center mb-4 mt-4">
                                        <button type="submit" class="btn btn-primary">Entrar</button>
                                    </div>
                                </form>
                                <div class="text-center">
                                    <h5 class="mb-5 ">Ou login com</h5>
                                    <ul class="list-inline">
                                        <li class="list-inline-item m-t-10"><a href="javascript:void()" class="btn btn-social btn-facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item m-t-10"><a href="javascript:void()" class="btn btn-twitter"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item m-t-10"><a href="javascript:void()" class="btn btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li class="list-inline-item m-t-10"><a href="javascript:void()" class="btn btn-google-plus"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                    </ul>
                                    <p class="mt-5">Não tem uma conta? <a href="/cadastro">Cadastre-se agora!</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
