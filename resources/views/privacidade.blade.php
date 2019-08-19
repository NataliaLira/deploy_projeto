@extends('layouts.app')

@section('content')

<?php

$root = 'http://localhost/projetoreeducarecicla/';
$foto = 'salveo%20planeta.png';

$title = $facebook_title = "Privacidade";
$keywords = 'recicla,palavras,chave,separadas,por,virgula';
$description = $facebook_description = substr(strip_tags('<p>A Reeduca, por sua atitude empresarial e pela qualidade das relações que busca desenvolver com os diversos agentes que articula, expressa sua marca na identidade com pessoas e empresas que se comprometem a atuar de maneira efetiva na colaboração por um mundo mais saudável para se habitar, em respeito ao meio ambiente do qual fazem parte e responsabilidade para com as gerações por vir.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div class="card config-card-politica mt-3">
    <div class="card-body mt-3">
        <h1 class="card-title">Politica de Privacidade</h1>
        <p class="font-politica"></p>
        <h4>Política de Privacidade <a href='http://www.reeducarecicla.com.br'>Reeduca Recicla</a></h4><br>
        <p class="font-politica">Todas as suas informações pessoais recolhidas, serão usadas para o ajudar a tornar a sua visita no nosso site o mais produtiva e agradável possível.</p>
        <p class="font-politica">A garantia da confidencialidade dos dados pessoais dos utilizadores do nosso site é importante para o Reeduca Recicla.</p>
        <p class="font-politica">Todas as informações pessoais relativas a membros, assinantes, clientes ou visitantes que usem o Reeduca Recicla serão tratadas em concordância com a Lei da Proteção de Dados Pessoais de 26 de outubro de 1998 (Lei n.º 67/98).</p>
        <p class="font-politica">A informação pessoal recolhida pode incluir o seu nome, e-mail, número de telefone e/ou telemóvel, morada, data de nascimento e/ou outros.</p>
        <p class="font-politica">O uso do Reeduca Recicla pressupõe a aceitação deste Acordo de privacidade. A equipa do Reeduca Recicla reserva-se ao direito de alterar este acordo sem aviso prévio. Deste modo, recomendamos que consulte a nossa política de privacidade com regularidade de forma a estar sempre atualizado.</p><br>
        <h4>Os Anúncios</h4><br>
        <p class="font-politica">Tal como outros websites, coletamos e utilizamos informação contida nos anúncios. A informação contida nos anúncios, inclui o seu endereço IP (Internet Protocol), o seu ISP (Internet Service Provider, como o Sapo, Clix, ou outro), o browser que utilizou ao visitar o nosso website (como o Internet Explorer ou o Firefox), o tempo da sua visita e que páginas visitou dentro do nosso website.</p><br>
        <h4>Cookie DoubleClick Dart</h4><br>
        <p class="font-politica">O Google, como fornecedor de terceiros, utiliza cookies para exibir anúncios no nosso website;</p>
        <p class="font-politica">Com o cookie DART, o Google pode exibir anúncios com base nas visitas que o leitor fez a outros websites na Internet;</p>
        <p class="font-politica">Os utilizadores podem desativar o cookie DART visitando a Política de <a href='http://politicaprivacidade.com/' title='privacidade da rede de conteúdo'>privacidade da rede de conteúdo</a> e dos anúncios do Google.</p><br>
        <h4>Os Cookies e Web Beacons</h4><br>
        <p class="font-politica">Utilizamos cookies para armazenar informação, tais como as suas preferências pessoas quando visita o nosso website. Isto poderá incluir um simples popup, ou uma ligação em vários serviços que providenciamos, tais como fóruns.</p>
        <p class="font-politica">Em adição também utilizamos publicidade de terceiros no nosso website para suportar os custos de manutenção. Alguns destes publicitários, poderão utilizar tecnologias como os cookies e/ou web beacons quando publicitam no nosso website, o que fará com que esses publicitários (como o Google através do Google AdSense) também recebam a sua informação pessoal, como o endereço IP, o seu ISP, o seu browser, etc. Esta função é geralmente utilizada para geotargeting (mostrar publicidade de Lisboa apenas aos leitores oriundos de Lisboa por ex.) ou apresentar publicidade direcionada a um tipo de utilizador (como mostrar publicidade de restaurante a um utilizador que visita sites de culinária regularmente, por ex.).</p>
        <p class="font-politica">Você detém o poder de desligar os seus cookies, nas opções do seu browser, ou efetuando alterações nas ferramentas de programas Anti-Virus, como o Norton Internet Security. No entanto, isso poderá alterar a forma como interage com o nosso website, ou outros websites. Isso poderá afetar ou não permitir que faça logins em programas, sites ou fóruns da nossa e de outras redes.</p><br>
        <h4>Ligações a Sites de terceiros</h4><br>
        <p class="font-politica">O Reeduca Recicla possui ligações para outros sites, os quais, a nosso ver, podem conter informações / ferramentas úteis para os nossos visitantes. A nossa política de privacidade não é aplicada a sites de terceiros, pelo que, caso visite outro site a partir do nosso deverá ler a politica de privacidade do mesmo.</p>
        <p class="font-politica">Não nos responsabilizamos pela política de privacidade ou conteúdo presente nesses mesmos sites.</p>
    </div>
</div>




@endsection
