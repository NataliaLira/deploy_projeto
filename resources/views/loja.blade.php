@extends('templateLoja')

@section('conteudo')

<?php

$root = 'http://localhost/projetoreeducarecicla/';
$foto = 'salveo%20planeta.png';

$title = $facebook_title = "Loja";
$keywords = 'recicla,palavras,chave,separadas,por,virgula';
$description = $facebook_description = substr(strip_tags('<p>A Reeduca, por sua atitude empresarial e pela qualidade das relações que busca desenvolver com os diversos agentes que articula, expressa sua marca na identidade com pessoas e empresas que se comprometem a atuar de maneira efetiva na colaboração por um mundo mais saudável para se habitar, em respeito ao meio ambiente do qual fazem parte e responsabilidade para com as gerações por vir.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>


<div>
        <nav class="navbar navbar-expand-lg navbar-light bg-verde shadow p-3">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav marginSubMenu">
                    <li class="nav-item active ">
                        <a class="nav-link letraSubMenu" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle letraSubMenu" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categorias
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item letraSubMenu" href="#">Roupas</a>
                            <a class="dropdown-item letraSubMenu" href="#">Móveis</a>
                            <a class="dropdown-item letraSubMenu" href="#">Decoração</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item letraSubMenu" href="#">Diversos</a>
                        </div>
                    </li>
                </ul>
            </div>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-dark my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mb-3">
                <h1 class="h1LojaHome">PRODUTOS</h1>
                <div class="linha"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-3 mb-3">
                <div class="card">
                    <img src="img/prod1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Eco Tanque 80 litros Casológica</h4>
                        <p class="card-text">O Eco Tanque permite que voc&ecirc; reutilize a &aacute;gua que seria
                            desperdi&ccedil;ada pela m&aacute;quina de lavar.</p>
                        <p class="card-text precoLoja">R$177,00</p>
                        <a href="internaProduto.php" class="btn btn-success">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-3 mb-3">
                <div class="card">
                    <img src="img/prod3.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Luminária solar de parede</h4>
                        <p class="card-text">O Eco Tanque permite que voc&ecirc; reutilize a &aacute;gua que seria
                            desperdi&ccedil;ada pela m&aacute;quina de lavar.</p>
                        <p class="card-text precoLoja">R$177,00</p>
                        <a href="internaProduto.php" class="btn btn-success">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-3 mb-3">
                <div class="card">
                    <img src="img/prod2.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Reservatório de óleo vegetal</h4>
                        <p class="card-text">O Eco Tanque permite que voc&ecirc; reutilize a &aacute;gua que seria
                            desperdi&ccedil;ada pela m&aacute;quina de lavar.</p>
                        <p class="card-text precoLoja">R$177,00</p>
                        <a href="internaProduto.php" class="btn btn-success">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-3 mb-3">
                <div class="card">
                    <img src="img/prod4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Vaso coletor de água da chuva</h4>
                        <p class="card-text">O Eco Tanque permite que voc&ecirc; reutilize a &aacute;gua que seria
                            desperdi&ccedil;ada pela m&aacute;quina de lavar.</p>
                        <p class="card-text precoLoja">R$177,00</p>
                        <a href="internaProduto.php" class="btn btn-success">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mt-3 mb-3">
                <div class="card">
                    <img src="img/prod5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Canudo ecológico</h4>
                        <p class="card-text ">O Eco Tanque permite que voc&ecirc; reutilize a &aacute;gua que seria
                            desperdi&ccedil;ada pela m&aacute;quina de lavar.</p>
                        <p class="card-text precoLoja">R$177,00</p>
                        <br>
                        <a href="internaProduto.php" class="btn btn-success">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-3 mb-3">
                <div class="card">
                    <img src="img/prod6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Carregador solar portátil</h4>
                        <p class="card-text">O Eco Tanque permite que voc&ecirc; reutilize a &aacute;gua que seria
                            desperdi&ccedil;ada pela m&aacute;quina de lavar.</p>
                        <p class="card-text precoLoja">R$177,00</p>
                        <a href="internaProduto.php" class="btn btn-success">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-3 mb-3">
                <div class="card">
                    <img src="img/prod7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Detergente multiuso biodegradável</h4>
                        <p class="card-text ">O Eco Tanque permite que voc&ecirc; reutilize a &aacute;gua que seria
                            desperdi&ccedil;ada pela m&aacute;quina de lavar.</p>
                        <p class="card-text precoLoja">R$177,00</p>
                        <a href="internaProduto.php" class="btn btn-success">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-3 mb-5">
                <div class="card">
                    <img src="img/prod8.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Tênis Adidas</h4>
                        <p class="card-text">Tênis Adidas feito inteiramente de materiais reciclados.</p>
                        <br>
                        <br>
                        <p class="card-text precoLoja">R$177,00</p>
                        <a href="internaProduto.php" class="btn btn-success">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 mb-5">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link colorPagination" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                        </li>
                        <li class="page-item"><a class="page-link colorPagination" href="#">1</a></li>
                        <li class="page-item"><a class="page-link colorPagination" href="#">2</a></li>
                        <li class="page-item"><a class="page-link colorPagination" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link colorPagination" href="#">Próxima</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>




@endsection
