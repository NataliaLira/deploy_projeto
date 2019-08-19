@extends('template')

@section('conteudo')



<section class="container-fluid">

    <div class="clearfix"></div>

    <div class="row mt-3">

            <div class="col-12 col-md-6 ">

                <img src="{{URL::asset('img/familiareciclado.png')}}" alt="" class="img-fluid">

            </div>

            <div class="col-12 col-md-6 ">

                        <h1 class="card-title titulo-card-home">Vai descartar seus <span class="color-title">resíduos?</span></h1>
                            <p class="card-text titulo-card-home texto-home">Você pode ajudar o planeta com uma ação simples, use o mapa interativo do
                            Reeduca Recicla mostrando pontos de reciclagem nas cidades. Funciona de maneira simples:
                            escolha a cidade na caixa de pesquisa e o mapa mostrará pontos de coleta nas
                            proximidades.
                            </p>
                            <!-- <h5>Saiba onde descartar seus resíduos</h5> -->
                            <p></p>
                            <a href="mapa.php" class="btn btn-success btn-card">Acessar o Mapa</a>


            </div>
    </div>

</section>


<!-- fim banner -->
<main class="container-fluid ">
    <!-- inicio reciclagem divulgaçao -->

    <div class="row no-gutters recicla-texto">
    <div class="col-md-6 texto-info-home px-3">
            <article>
                <h1 class="titulo-card-home d-none d-sm-none d-md-block d-lg-block d-xl-block ">Por que <span class="color-title">reciclar ?</span>
                </h1>
                <h2 class="titulo-card-home d-block d-sm-block d-md-none d-lg-none d-xl-none">Por que <span class="color-title">reciclar ?</span>
                </h2>
                <p class="texto-card-home texto-home">Conforme a população do planeta aumenta, cresce também a quantidade de
                    lixo
                    produzido. Porém, ao longo das décadas, foram descobertas novas maneiras de reaproveitar estes
                    materiais que iam diretamente para os lixões, como plástico, papel, metais, vidro e madeira.
                    Este
                processo recebe o nome de reciclagem.</p>

            </article>
        </div>
        <div class="col-md-6 img-texto">
            <img src="img/nature2.png" class="img-fluid " alt="Por que reciclar?">
        </div>

    </div>
</main>

<!-- fim reciclagem divulgação -->

<main class="container-fluid no-gutters main-pag-home">

    <div class="row no-gutters recicla-texto">

        <div class="col-md-6 img-texto d-none d-sm-none d-md-block d-lg-block d-xl-block">
            <img src="img/lojavirtual.jpg" class="img-fluid " alt="Loja virtual">
        </div>
        <div class="col-md-6 texto-info-home px-3 d-none d-sm-none d-md-block d-lg-block d-xl-block">
            <article>
                <h1 class="titulo-card-home-loja d-none d-sm-none d-md-block d-lg-block d-xl-block ">Visite nossa loja <span class="color-title">virtual!</span>
                </h1>

                <p class="texto-card-home-loja texto-home">Trabalhamos com produtos feitos de material reciclado.</p>
                <a href="/loja" class="btn btn-success btn-card">Acessar a Loja</a>

            </article>
        </div>
    </div>
</main>




    <!-- Banner topo mobile loja -->

    <div class="d-block d-sm-block d-md-none d-lg-none d-xl-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <img class="card-img-top" src="img/bannerlojaresponsivo.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Visite nossa loja virtual</h4>
                            <p class="card-text">Trabalhamos com produtos feitos de material reciclado.</p>
                            <a href="#" class="btn btn-primary">Acessar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- fim propaganda loja -->

<main class="container-fluid ">
    <!-- inicio reciclagem divulgaçao -->

    <div class="row no-gutters recicla-texto">
    <div class="col-md-6 texto-info-home px-3">
            <article>
                <h1 class="titulo-card-home d-none d-sm-none d-md-block d-lg-block d-xl-block ">Nossos <span class="color-title">Parceiros!</span>
                </h1>
                <h2 class="titulo-card-home d-block d-sm-block d-md-none d-lg-none d-xl-none">Nossos <span class="color-title">Parceiros !</span>
                </h2>
                <p class="texto-card-home texto-home">Conheça nossos parceiros. A Reeduca Recicla entende que o sucesso de qualquer organização não se faz sozinho e que o trabalho em parceria é fundamental</p>

            </article>
        </div>
        <div class="col-12 col-md-6 ">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/parceiros1.png" alt="Primeiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/parceiros2.png" alt="Segundo Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/parceiros3.png" alt="Segundo Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/parceiros4.png" alt="Segundo Slide">
                    </div>

                </div>
                <a class="carousel-control-prev " href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon carrousel-icone" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>

    </div>
</main>



</main>


@endsection
