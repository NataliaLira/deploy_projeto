@extends('layouts.app')

@section('content')
<?php
$root = 'http://localhost/projetoreeducarecicla/';
$foto = 'salveo%20planeta.png';

$title = $facebook_title = "Mapa Interativo";
$keywords = 'recicla,palavras,chave,separadas,por,virgula';
$description = $facebook_description = substr(strip_tags('<p>A Reeduca, por sua atitude empresarial e pela qualidade das relações que busca desenvolver com os diversos agentes que articula, expressa sua marca na identidade com pessoas e empresas que se comprometem a atuar de maneira efetiva na colaboração por um mundo mais saudável para se habitar, em respeito ao meio ambiente do qual fazem parte e responsabilidade para com as gerações por vir.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);
?>

<div style="position: relative;">
		<div class="panel city_panel">
			<div class="city_head">
				<div class="photo">
					<a href="#" class="fit_size" data-tooltip="visao geral">
						<img src="img/id_1.jpg" alt="" />
					</a>
				</div>
				<div class="main_cityinfo">
					<div class="dropdown">
						<button class="btn btn-dark dropdown-toggle botao-pesquisa" type="button" data-toggle="dropdown"><span class="label" data-id="1">São Paulo</span><span class="caret"></span></button>
						<ul class="dropdown-menu lista-cidades">
							<li><a>Selecione a cidade</a></li>
						</ul>
					</div>
				</div>
				<a href="#" class="opensearch"></a>

				<!-- <div class="search_block"><form id="search_left" action="#"><input type="text" placeholder="Qual a sua cidade?" name="address" /><input type="submit" value="OK" style="display:none;" /><i class="ico icomarker"></i><i data-tooltip="Minha Localizacao" class="ico icohome"></i></form></div> -->
			</div>
			<div class="panel_body">
				<div class="panel_body_wrap">
					<div class="trash_type">


						<button class="btn btn-primary d-block d-sm-none mb-3" type="button" data-toggle="collapse" data-target="#seletorDeCategoria" style="font-size: 17px; width: 100%; text-align: center;">Escolher categoria</button>

						<div class="collapse navbar-collapse d-sm-block " id="seletorDeCategoria">
							<div class="trash_type_title">ESCOLHA O MATERIAL A SER RECICLADO:</div>

							<div class="row">
								<div class="type_item col-3">
									<a href="#" data-id="1" style="background-image: url(img/trash/trash1.png);"></a>
									<span class="custom-tooltip">Papel</span>
								</div>
								<div class="type_item col-3">
									<a href="#" data-id="2" style="background-image: url(img/trash/trash2.png);"></a>
									<span class="custom-tooltip">Vidro</span>
								</div>
								<div class="type_item col-3">
									<a href="#" data-id="3" style="background-image: url(img/trash/trash3.png);"></a>
									<span class="custom-tooltip">Plástico</span>
								</div>
								<div class="type_item col-3">
									<a href="#" data-id="4" style="background-image: url(img/trash/trash4.png);"></a>
									<span class="custom-tooltip">Metal</span>
								</div>
								<div class="type_item col-3">
									<a href="#" data-id="5" style="background-image: url(img/trash/trash5.png);"></a>
									<span class="custom-tooltip">Roupas</span>
								</div>
								<div class="type_item col-3">
									<a href="#" data-id="6" style="background-image: url(img/trash/trash6.png);"></a>
									<span class="custom-tooltip">Celular</span>
								</div>
								<div class="type_item col-3">
									<a href="#" data-id="7" style="background-image: url(img/trash/trash7.png);"></a>
									<span class="custom-tooltip">Resíduos Perigosos</span>
								</div>
								<div class="type_item col-3">
									<a href="#" data-id="8" style="background-image: url(img/trash/trash8.png);"></a>
									<span class="custom-tooltip">Baterias</span>
								</div>
								<div class="type_item col-3">
									<a href="#" data-id="9" style="background-image: url(img/trash/trash9.png);"></a>
									<span class="custom-tooltip">Lampadas</span>
								</div>
								<div class="type_item col-3">
									<a href="#" data-id="10" style="background-image: url(img/trash/trash10.png);"></a>
									<span class="custom-tooltip">Eletrodomésticos</span>
								</div>
								<div class="type_item col-3">
									<a href="#" data-id="11" style="background-image: url(img/trash/trash11.png);"></a>
									<span class="custom-tooltip">Tetra Pack</span>
								</div>
							</div>
							<button class="btn btn-primary d-block d-sm-none mt-3" type="button" data-toggle="collapse" data-target="#seletorDeCategoria" style="font-size: 17px; width: 100%; text-align: center;"><i class="fa fa-chevron-up"></i></button>
						</div>





					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

    <div id="map"></div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDottVHFaZukoZo_EvVv-jxbhOCpC1LMeY&callback=initMap"></script>


<script>

document.addEventListener('DOMContentLoaded', function() {


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
                     $.getJSON(`/marcadores?cidade=${cidade}&categoria=${categoria}`).then(function(response){
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
                 $.getJSON('/cidades').then(function(response){
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
                 jQuery('#app nav').each(function(){
                     if(jQuery(this).css('display') != 'none') tamanhoHeader = jQuery(this).outerHeight();
                 });
                 jQuery('html, body').animate({
                    'scroll-top': tamanhoHeader+'px'
                }, 1000);

            });


                </script>
<?php // endif ?>


@endsection
