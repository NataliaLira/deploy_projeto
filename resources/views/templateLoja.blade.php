<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=yes">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="theme-color" content="#000000">
		<link rel="icon" href="img/favicon.png" sizes="16x16 32x32" type="image/jpg">

		<!-- Metas para o Google -->
		<title><?php @print($title); ?></title>
		<meta name="description" content="<?php @print($description); ?>">
		<meta name="keywords" content="<?php @print($keywords); ?>">

		<!-- Metas para o Facebook -->
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?php @print($facebook_title); ?>" />
		<meta property="og:url" content="<?php @print($facebook_url); ?>"/>
		<meta property="og:site_name" content="<?php @print($facebook_site_name); ?>" />
		<meta property="og:description" content="<?php @print($facebook_description); ?>"/>
		<meta property="og:image" content="<?php @print($facebook_image); ?>" />
		<?php if (!empty($facebook_image_width)): ?><meta property="og:image:width" content="<?php @print($facebook_image_width); ?>" /><?php endif ?>
		<?php if (!empty($facebook_image_height)): ?><meta property="og:image:height" content="<?php @print($facebook_image_height); ?>" /><?php endif ?>
		<meta property="fb:app_id" content="501123709922257" />

		<title>Reeduca Recicla</title>

		<?php if (strpos($_SERVER['HTTP_USER_AGENT'], "Google Page Speed Insights") === false): ?>
			<!-- O que tiver aqui dentro o page speed do Google não consegue ver -->
		<?php endif ?>
</head>
<body>
         <style>#loading{background-color: green;height: 100%;width: 100%;position: fixed;z-index: 999999;margin-top: 0px;top: 0px;}#loading-center{width: 100%;height: 100%;position: relative;}#loading-center-absolute {position: absolute;left: 50%;top: 50%;height: 150px;width: 150px;margin-top: -75px;margin-left: -75px;   -ms-transform: rotate(45deg); -webkit-transform: rotate(45deg);transform: rotate(45deg); }.object{width: 20px;height: 20px;background-color:#FFF;position: absolute;left: 65px;top: 65px;}.object:nth-child(2n+0) {margin-right: 0px;}#object_one {-webkit-animation: object_one 2s infinite;animation: object_one 2s infinite;-webkit-animation-delay: 0.2s; animation-delay: 0.2s; }#object_two {-webkit-animation: object_two 2s infinite;animation: object_two 2s infinite;-webkit-animation-delay: 0.3s; animation-delay: 0.3s; }#object_three {-webkit-animation: object_three 2s infinite;animation: object_three 2s infinite;-webkit-animation-delay: 0.4s; animation-delay: 0.4s; }#object_four {-webkit-animation: object_four 2s infinite;animation: object_four 2s infinite;-webkit-animation-delay: 0.5s; animation-delay: 0.5s; }#object_five {-webkit-animation: object_five 2s infinite;animation: object_five 2s infinite;-webkit-animation-delay: 0.6s; animation-delay: 0.6s; }#object_six {-webkit-animation: object_six 2s infinite;animation: object_six 2s infinite;-webkit-animation-delay: 0.7s; animation-delay: 0.7s; }#object_seven {-webkit-animation: object_seven 2s infinite;animation: object_seven 2s infinite;-webkit-animation-delay: 0.8s; animation-delay: 0.8s; }#object_eight {-webkit-animation: object_eight 2s infinite;animation: object_eight 2s infinite;-webkit-animation-delay: 0.9s; animation-delay: 0.9s; }#object_big{position: absolute;width: 50px;height: 50px;left: 50px;top: 50px;-webkit-animation: object_big 2s infinite;animation: object_big 2s infinite;-webkit-animation-delay: 0.5s; animation-delay: 0.5s; }  @-webkit-keyframes object_big {50% { -webkit-transform: scale(0.5); }}@keyframes object_big {50% { transform: scale(0.5);-webkit-transform: scale(0.5);} }@-webkit-keyframes object_one {50% { -webkit-transform: translate(-65px,-65px)  ; }}@keyframes object_one {50% { transform: translate(-65px,-65px) ;-webkit-transform: translate(-65px,-65px) ;} }@-webkit-keyframes object_two {50% { -webkit-transform: translate(0,-65px) ; }}@keyframes object_two {50% { transform: translate(0,-65px) ; -webkit-transform: translate(0,-65px) ; } }@-webkit-keyframes object_three {50% { -webkit-transform: translate(65px,-65px) ; }}@keyframes object_three {50% { transform: translate(65px,-65px) ;-webkit-transform: translate(65px,-65px) ;} }@-webkit-keyframes object_four {50% { -webkit-transform: translate(65px,0) ; }}@keyframes object_four {50% { transform: translate(65px,0) ;-webkit-transform: translate(65px,0) ;} }@-webkit-keyframes object_five {50% { -webkit-transform: translate(65px,65px) ; }}@keyframes object_five {50% { transform: translate(65px,65px) ;-webkit-transform: translate(65px,65px) ;} }@-webkit-keyframes object_six {50% { -webkit-transform: translate(0,65px) ; }}@keyframes object_six {50% { transform:  translate(0,65px) ;-webkit-transform:  translate(0,65px) ;} }@-webkit-keyframes object_seven {50% { -webkit-transform: translate(-65px,65px) ; }}@keyframes object_seven {50% { transform: translate(-65px,65px) ;-webkit-transform: translate(-65px,65px) ;} }@-webkit-keyframes object_eight {50% { -webkit-transform: translate(-65px,0) ; }}@keyframes object_eight {50% { transform: translate(-65px,0) ;-webkit-transform: translate(-65px,0) ;} }</style>
<div id="loading"><div id="loading-center"><div id="loading-center-absolute"><div class="object" id="object_one"></div><div class="object" id="object_two"></div><div class="object" id="object_three"></div><div class="object" id="object_four"></div><div class="object" id="object_five"></div><div class="object" id="object_six"></div><div class="object" id="object_seven"></div><div class="object" id="object_eight"></div><div class="object" id="object_big"></div></div></div></div>
<?php if (false): ?>
<?php endif ?>
<header>
        <nav class="navbar navbar-light bg-preto active shadow p-3 mb-0 displayQuery">
            <div class="col-4">
                <a class="navbar-brand align-self-start" href="./">
                    <img src="img/logo_lado.png" class="logoMargin logoSize" alt="">
                </a>
            </div>
            <div class="col-8">
                <ul class="nav marginHeader justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active grow efeitoTransicaoLoja" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow efeitoTransicaoLoja" href="/mapa">Mapa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow efeitoTransicaoLoja" href="/loja">Loja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow efeitoTransicaoLoja" href="/sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow efeitoTransicaoLoja" href="/contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow efeitoTransicaoLoja" href="/login">Login</a>
                    </li>

                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark bg-preto displayBurg">
            <div class="row col-12 no-gutters">
                <div class="col-5">
                    <a class="navbar-brand align-self-start" href="./">
                        <img src="img/logo_lado.png" class="logoMargin logoSize" alt="">
                    </a>
                </div>
                <div class="col">
                    <button class="navbar-toggler pull-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link lojaBurg" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lojaBurg " href="/mapa">Mapa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lojaBurg " href="/loja">Loja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lojaBurg" href="/sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lojaBurg" href="/contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lojaBurg" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    </header>

    <main>
        @yield('conteudo')
    </main>



         <!--Start Footer-->
         <footer class="footer" id="footer">
            <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="emergency">

                    <img src="img/logo_branco.png" width="200" alt="">
                     </div>
                 </div>
             </div>


             <div class="main-footer">
                 <div class="row">

                     <div class="col-md-4">

                         <div class="useful-links">
                             <div class="title">
                                 <h5>Links</h5>
                             </div>

                             <div class="detail">
                                 <ul>

                                     <li><a href="#.">Home</a></li>
                                     <li><a href="#.">FAQ</a></li>
                                     <li><a href="#.">Mapa</a></li>
                                     <li><a href="#.">Termo de uso</a></li>
                                     <li><a href="#.">Loja</a></li>
                                     <li><a href="#.">Politica de Privacidade</a></li>
                                     <li><a href="#.">Sobre</a></li>
                                     <li><a href="#.">Contato</a></li>
                                     <li><a href="#.">Login</a></li>

                                 </ul>
                             </div>

                         </div>

                     </div>

                     <div class="col-md-4 mb-3">

                         <div class="newsletter">
                             <div class="title">
                                 <h5>NEWSLETTER</h5>
                             </div>

                             <div class="detail">

                                     <div class="signup-text">
                                         <i class="fa fa-envelope-open"></i>
                                         <span>Inscreva-se com seu nome e e-mail para receber nossas atualizações.</span>
                                     </div>

                                     <div class="form">
                                     <p class="subscribe_success" id="subscribe_success" style="display:none;"></p>
                                     <p class="subscribe_error" id="subscribe_error" style="display:none;"></p>

                                     <form name="subscribe_form" id="subscribe_form" method="post" action="#" onSubmit="return false">
                                         @csrf
                                         <input type="text" data-delay="300" placeholder="Seu nome" name="subscribe_name" id="subscribe_name" onKeyPress="removeChecks();" class="input" >
                                         <input type="text" data-delay="300" placeholder="Email" name="subscribe_email" id="subscribe_email" onKeyPress="removeChecks();" class="input" >
                                         {{-- <input name="Subscribe" type="submit" value="Assinar" onClick="validateSubscription();"> --}}
                                    <button type="submit" class="btn btn-card btn-secondary" value="Assinar">Assinar</button>
                                     </form>

                                     </div>

                                 </div>


                         </div>

                     </div>
                     <div class="col-md-4">

                         <div class="get-touch">
                             <div class="title">
                                 <h5>CONTATO</h5>
                             </div>

                             <div class="detail">
                                 <div class="get-touch">


                                     <span class="text">Conheça o projeto e compartilhe sua ideias com nossa equipe!</span>


                                     <ul>
                                         <li><i class="fa fa-map-marker"></i> <span>Reeduca Recicla, São Paulo, SP</span></li>
                                         <li><i class="fa fa-phone"></i> <span>(11) 99999-1029</span></li>
                                         <li><a href="#."><i class="fa fa-envelope"></i> <span>contato@reeducarecicla.com.br</span></a></li>
                                     </ul>

                                 </div>
                             </div>

                         </div>

                     </div>

                 </div>

             </div>

         </div>

         <div class="footer-bottom">
             <div class="container">
                 <div class="row">

                     <div class="col-md-6">
                         <span class="copyrights">Copyright &copy; 2019 Reeduca Recicla. Todos os Direitos Reservados.</span>
                     </div>

                     <div class="col-md-6">
                        <ul class="list-inline">
                            <li class="list-inline-item m-t-10"><a href="" class="btn btn-facebook-footer"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item m-t-10"><a href="" class="btn btn-twitter-footer"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item m-t-10"><a href="" class="btn btn-instagram"><i class="fa fa-instagram"></i></a>
                            </li>

                        </ul>
                     </div>

                 </div>
             </div>

         </div>
        </footer>
        </div>

            <?php if (strpos($_SERVER['HTTP_USER_AGENT'], "Google Page Speed Insights") === false): ?>
                <!-- O que tiver aqui dentro o page speed do Google não consegue ver -->
            <?php endif ?>

            <link rel="stylesheet" href="{{asset('css/app.css')}}">
            <link rel="stylesheet" href="{{asset('css/style.css')}}">
            <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">

            {{-- <link href="{{asset('css/font-icons.css')}}" rel="stylesheet" type="text/css" /> --}}
            <link href="{{asset('css/recicla-guide.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('css/dropdown.min.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('css/jquery.fancybox.min.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('css/stylesa361.css?ver=2.3')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('css/beta-popup.css')}}" rel="stylesheet" type="text/css" />



            <!-- <script src="js/jquery.js"></script> -->
            <script src="{{url('https://code.jquery.com/jquery-3.4.0.min.js')}}"></script>
            <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
            <script src="{{asset('js/recicla.min.js')}}"></script>

            <?php if (strpos($_SERVER['SCRIPT_NAME'], 'mapa.php')): ?>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDottVHFaZukoZo_EvVv-jxbhOCpC1LMeY&callback=initMap"></script>
        <script src="js/gmaps.js"></script> <!-- plugin para google maps api -->

            <script>

                            //////////////////////////////////////////////////////////////////////////////////////////
                            // Inicia o mapa informando o elemento, as coordenadas iniciais e algumas opções extras //
                            //////////////////////////////////////////////////////////////////////////////////////////
                            var zoomInicial = 5;
                            var latitudeInicial = -20.347000;
                            var longitudeInicial = -40.294000;
                            var mapa = new gMaps('#map',latitudeInicial,longitudeInicial, { zoom : zoomInicial, scrollwheel : false, pretoebranco : false });

                            /**
                             * Função a ser chamada sempre que houver necessidade de mudar os marcadores no mapa, ou seja, quando alguém mudar quais marcadores deseja ver
                             */
                             function atualizarMapa() {

                                ////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                // Percorre os ícones de objetos descartáveis para identificar quais estão ativos e obter o id de cada um //
                                ////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                let categoria = [];
                                $('.trash_type .type_item a').each(function(){
                                    if( $(this).is('.active') ) categoria.push($(this).data('id'));
                                });

                                /////////////////////////
                                // pega o id da cidade //
                                /////////////////////////
                                let cidade = $('button.botao-pesquisa span.label').data('id');

                                //////////////////////////////////////////////////////////////
                                // remove os marcadores do mapa antes de adicionar os novos //
                                //////////////////////////////////////////////////////////////
                                mapa.removerMarcadores();

                                /**
                                 * faz uma solicitação ajax para obter um json com os novos marcadores
                                 * @param  [url] passa a url do arquivo que retorna o json com os parâmetros da cidade e categorias selecionadas
                                 */
                                 $.getJSON(`marcadores.php?cidade=${cidade}&categoria=${categoria}`).then(function(response){
                                    // por ser uma requisição com Promise, é necessário que o        👆 then()
                                    // tratamento do retorn o seja feito no método then()
                                    // que é executado quando a requisição é bem sucedida
                                    window.marcadores = response;

                                    ///////////////////////////////////////////////////////////////////
                                    // se não encontrar nenhum marcador, reduz o zoom para o inicial //
                                    ///////////////////////////////////////////////////////////////////
                                    if( window.marcadores.length == 0 ) {
                                        mapa.map.setZoom(zoomInicial);
                                        mapa.centralizarMapa(latitudeInicial, longitudeInicial);
                                    }

                                    else {
                                        for (var i = window.marcadores.length - 1; i >= 0; i--) {
                                            ///////////////////////////////////////////////////////////////////////////////////////////////
                                            // para cada iteração com o vetor, chama a função addMarker() para inserir os pontos no mapa //
                                            ///////////////////////////////////////////////////////////////////////////////////////////////
                                            mapa.addMarker({
                                                latitude : window.marcadores[i].latitude,
                                                longitude : window.marcadores[i].longitude,
                                                title : window.marcadores[i].nome,
                                                //////////////////////////////////////////////////////////////////////////////
                                                // 👇 aqui montamos o html que será exibido quando o usuário clicar no ponto //
                                                //////////////////////////////////////////////////////////////////////////////
                                                html : `
                                                <p><b>${window.marcadores[i].nome}</b></p>
                                                <p>${window.marcadores[i].endereco}</p>
                                                <p>${window.marcadores[i].telefone}</p>
                                                <p><a href="https://maps.google.com?saddr=Current+Location&daddr=${window.marcadores[i].latitude},${window.marcadores[i].longitude}" target="_blank" title="Clique nesse link para abrir o GPS">Abrir GPS</a></p>
                                                `,
                                            });
                                        }
                                        ///////////////////////////////////////////////////////////////////////////////////////////////
                                        // por fim chama essa função para centralizar o mapa com base nos marcadores recém colocados //
                                        ///////////////////////////////////////////////////////////////////////////////////////////////
                                        mapa.zoomParaAjustar();
                                    }
                                });
                                }

                            /**
                             * função responsável por popular a lista de cidades com base em um json vindo por ajax
                             */
                             function atualizarCidades() {
                                 for (var i = 0; i < window.cidades.length; i++) {
                                     $('ul.lista-cidades').append(
                                         $('<li>').append(
                                             $('<a>')
                                             .text(window.cidades[i].nome)
                                            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                            // é importante armazenar também a imagem e id para ser possível alterar a imagem ao mudar a cidade e para o ajax que obtém os marcadores //
                                            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                            .data('imagem', window.cidades[i].imagem)
                                            .data('id', window.cidades[i].id)
                                            )
                                         );
                                 }
                             }

                             //////////////////////////////////////////////////////////////////////////////////////////////////////
                             // adiciona função de click nos ícones para adicionar uma classe de active neles e atualizar o mapa //
                             //////////////////////////////////////////////////////////////////////////////////////////////////////
                             $('.trash_type .type_item a').on('click', function(event) {
                                 event.preventDefault();
                                 if( this.className == '' ) $(this).addClass('active');
                                 else $(this).removeClass('active');
                                 atualizarMapa();
                             });

                             ///////////////////////////////////////////////////////////////////////
                             // faz uma consulta ajax para obter um json com os nomes das cidades //
                             ///////////////////////////////////////////////////////////////////////
                             $.getJSON('cidades.php').then(function(response){
                                 window.cidades = response;
                                 atualizarCidades();
                             });

                             //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                             // adiciona uma função de click nas cidades para atualizar o nome, a foto e o id para ser pego posteriormente na função atualizarMapa() //
                             //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                             $('ul.lista-cidades').on('click', 'li a', function(){
                                 $('button.botao-pesquisa span.label')
                                 .text( $(this).text() )
                                 .data('id', $(this).data('id')); /*👈 importante para a função atualizarMapa()*/
                                 $('.city_head .photo img').attr('src',  $(this).data('imagem'));
                             });

                             // rola direto pro mapa
                             let tamanhoHeader = 0;
                             jQuery('header nav').each(function(){
                                 if(jQuery(this).css('display') != 'none') tamanhoHeader = jQuery(this).outerHeight();
                             });
                             jQuery('html, body').animate({
                                'scroll-top': tamanhoHeader+'px'
                            }, 1000);
                            </script>
            <?php endif ?>
    </footer>
</body>
</html>
