@extends('layoutsloja.app')

@section('content')
<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="/home">Home</a> <span class="mx-2 mb-0">/</span> 
            <a href="/loja">Loja</a><span class="mx-2 mb-0">/</span>
            <strong class="text-black">Produto</strong></div>
        </div>
    </div>
</div>
<div class="container">
        <div class="shop_wrapper col-md-12 mt-5">
            <form action="" method="post" id="product_addtocart_form" class="cart">
                <input name="form_key" type="hidden" value="mf810E7lRHb0jHHz" />
                
                <!-- inicio imagens -->
                <div class="row">
                    <div class="shop-left shop_item col-md-6 ">

                            <div id="carouselExampleControls " class="carousel slide border-carousel" data-ride="carousel">
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img class="d-block w-100" src="img/IMG1400.png" alt="First slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="img/capt2.png" alt="Second slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="img/capt6.png" alt="Third slide">
                                      </div>
                                      <div class="carousel-item">
                                            <img class="d-block w-100" src="img/capt3.png" alt="Third slide">
                                          </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>

                        
                    </div>

                    <!-- fim imagens -->

                    <div class="shop-right col-lg-6">
                        <div class="title">
                            <h1 class="shorter product-name">Eco Tanque 80 litros Casológica</h1>
                            
                            <p class="availability in-stock">Disponibilidade: <span>Em estoque</span></p>
                            <div class="price-box">
                                <span class="regular-price" id="product-price-1509">
                                    <span class="price">R$177,00</span> </span>

                            </div>

                        </div>
                        <div class="shop_desc">
                            <p>
                                <p>O Eco Tanque permite que voc&ecirc; reutilize a &aacute;gua que seria
                                    desperdi&ccedil;ada pela m&aacute;quina de lavar.</p>
                            </p>
                        </div>

                        <!-- Adicionar quantidade -->

                        <div class="add-to-box">
                            <div class="shop_meta">
                                <div class="pull-left">
                                    <div class="btn-shop">
                                        <div class="form-inline">
                                            <div class="form-group has-success has-feedback">
                                                <span><i class="fa fa-minus"></i></span>
                                                <input type="text" class="form-control" title="Qty" value="1" name="qty"
                                                    id="qty" />
                                                <span><i class="fa fa-plus"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- fim add quantidade -->

                            <!-- botão comprar -->

                            <div class="pull-right btn-comprar">
                                <div class="btn-shop">
                                    <a class="btn woo_btn btn-success" href="/carrinho">Comprar</a>
                                   
                                </div>
                            </div>
                            <!-- fim botao comprar  -->
                            <div class="addto">
                            </div>
                        </div>
                    </div>
                    <div class="clearer"></div>
                </div>
            </form>
            <!-- inicio descrição do propduto -->
            <div class="clearfix"></div>
            <div id="shop_features" class="tabbable">
                <ul class="nav nav-tabs">
                    <li class="active titulo-prod">
                        <span>
                            Descrição <span>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="box-description">
                        <div class="std">
                            <p>Al&eacute;m de armazenar a &aacute;gua que seria desperdi&ccedil;ada pela m&aacute;quina
                                de lavar, trata-se de um tanque reciclado do transporte de azeitonas. Os tanques
                                s&atilde;o restaurados pela equipe especializada Casol&oacute;gica, garantindo um
                                destino nobre ao material e impedindo que o mesmo v&aacute; parar nos aterros, poluindo
                                o meio ambiente.</p>
                            <h2>Pronto para instala&ccedil;&atilde;o!</h2>
                            <ul>
                                <li>O EcoTanque 80 j&aacute; vem pronto para coletar a &aacute;gua de sua m&aacute;quina
                                    de lavar.</li>
                                <li>Basta retirar o plug da tampa do EcoTanque 80 e inserir a mangueira de sua
                                    m&aacute;quina de lavar.</li>
                                <li>O encaixe ser&aacute; perfeito!</li>
                                <li>Ap&oacute;s o enchimento do tanque, retire a &aacute;gua atrav&eacute;s de sua
                                    torneira estrategicamente instalada.</li>
                                <li>Pronto! Acabamos de economizar 80 litros de &aacute;gua!</li>
                            </ul>
                            <h2>Sugest&atilde;o de uso:</h2>
                            <ul>
                                <li>Colete a &aacute;gua dos enxagues de sua m&aacute;quina, ela possui uma qualidade
                                    melhor para ser reutilizada.</li>
                                <li>80 Litros &eacute; o suficiente para armazenar o volume de &aacute;gua dos enxagues.
                                </li>
                                <li>Para as m&aacute;quinas mais modernas este volume pode ser menor e as mais antigas
                                    um pouco maior.</li>
                                <li>Coloque seu EcoTanque 80 pr&oacute;ximo a sua m&aacute;quina, desta forma n&atilde;o
                                    precisar&aacute; comprar uma mangueira de maquina maior.</li>
                                <li>Detalhe 1: O EcoTanque 80 cabe perfeitamente embaixo do seu tanque de lavar roupas!
                                </li>
                                <li>Detalhe 2: A torneirinha encaixa exatamente em uma lavadora de alta press&atilde;o.
                                </li>
                            </ul>
                            <h2>Posso utilizar a &aacute;gua coletada para:</h2>
                            <ul>
                                <li>Lavagens de pisos, autom&oacute;veis e m&aacute;quinas.</li>
                                <li>Descargas no vaso sanit&aacute;rio.</li>
                            </ul>
                            <h2>Como ele funciona:</h2>
                            <ul>
                                <li>Coloque a mangueira da m&aacute;quina de lavar na abertura presente na tampa e
                                    colete a &aacute;gua!</li>
                            </ul>
                            <h2>Caracter&iacute;sticas do produto:</h2>
                            <ul>
                                <li>Capacidade: 80 litros.</li>
                                <li>Altura com tampa: 70 cm</li>
                                <li>Di&acirc;metro base: 35 cm</li>
                                <li>Peso: 3 kg</li>
                                <li>Material: Polietileno de alta densidade</li>
                                <li>Cor: verde com tampa verde</li>
                                <li>Inclusos: Torneira de 1/2 de ferro, plug de 50mm para encaixe da mangueira da
                                    m&aacute;quina.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>  
    
    

@endsection