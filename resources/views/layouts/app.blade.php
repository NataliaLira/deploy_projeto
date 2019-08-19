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
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm active shadow ">
            <div class="container">
                    <a class="navbar-brand align-self-start" href="./">
                        <img src="img/logo_lado.png" class="logoMargin logoSize" alt="">
                    </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                                    <li class="nav-item">
                                        <a class="nav-link active grow efeitoTransicao" href="/inicio">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active grow efeitoTransicao" href="/mapa">Mapa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active grow efeitoTransicao" href="/loja">Loja</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active grow efeitoTransicao" href="/sobre">Sobre</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active grow efeitoTransicao" href="/contato">Contato</a>
                                    </li>



                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link active grow efeitoTransicao" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link active grow efeitoTransicao" href="{{ route('register') }}">{{ __('Cadastro') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                    @if(Auth::user()->img != null)
                                    <img class="img-profile rounded-circle" src="{{asset(Auth::user()->img)}}" >
                                @endif
                                <a id="navbarDropdown" class="nav-link efeitoTransicao dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>



        <main>
            @yield('content')
        </main>

    </div>
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

                                 <li><a href="/inicio">Home</a></li>
                                 <li><a href="/faq">FAQ</a></li>
                                 <li><a href="/mapa">Mapa</a></li>
                                 <li><a href="/termo">Termo de uso</a></li>
                                 <li><a href="/loja">Loja</a></li>
                                 <li><a href="/privacidade">Politica de Privacidade</a></li>
                                 <li><a href="/sobre">Sobre</a></li>
                                 <li><a href="/contato">Contato</a></li>
                                 <li><a href="/login">Login</a></li>

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
    <!--End Footer-->

                <?php if (strpos($_SERVER['HTTP_USER_AGENT'], "Google Page Speed Insights") === false): ?>
                    <!-- O que tiver aqui dentro o page speed do Google não consegue ver -->
                <?php endif ?>

                <link rel="stylesheet" href="{{asset('css/app.css')}}">
                <link rel="stylesheet" href="{{asset('css/style.css')}}">
                <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">


                <!-- Fonts -->
                {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}



                {{-- <link href="{{asset('css/font-icons.css')}}" rel="stylesheet" type="text/css" /> --}}
                <link href="{{asset('css/recicla-guide.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('css/dropdown.min.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('css/jquery.fancybox.min.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('css/stylesa361.css?ver=2.3')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('css/beta-popup.css')}}" rel="stylesheet" type="text/css" />



                <script src="{{asset('js/jquery.js')}}"></script>
                <script src="{{url('https://code.jquery.com/jquery-3.4.0.min.js')}}"></script>
                <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
                <script src="{{asset('js/bootstrap.min.js')}}"></script>
                {{-- <script src="{{asset('js/app.js') }}" defer></script> --}}
                <script src="{{asset('js/gmaps.js')}}"></script> <!-- plugin para google maps api -->
                <script src="{{asset('js/recicla.min.js')}}"></script>
</body>
</html>
