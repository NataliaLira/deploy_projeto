<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Routing\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/inicio', 'InicioController@inicio');
Route::get('/', 'InicioController@inicio');

Route::get('/contato', 'ContatoController@contato');

Route::get('/sobre', 'SobreController@sobre');

Route::get('/mapa', 'MapaController@mapa');

Route::get('/loja', 'LojaController@loja');

Route::get('/login', 'LoginController@login');

Route::get('/faq', 'FaqController@faq');

Route::get('/cadastro', 'UsuarioController@cadastro');

Route::post('/cadastro', 'UsuarioController@cadastrarUsuario');

Route::get('/carrinho', 'CarrinhoController@carrinho');

Route::get('/finalizada', 'FinalizadaController@finalizada');

Route::get('/dadoscompra', 'DadosCompraController@dadoscompra');

Route::get('/privacidade', 'PrivacidadeController@privacidade');

Route::get('/termos', 'TermosController@termos');

Route::get('/marcadores', 'MarcadoresController@marcadores');

Route::get('/cidades', 'CidadesController@obterJson');

Route::get('/add-cidade', 'CidadesController@addCidade');

Route::get('/add-material', 'MaterialController@addMaterial');

Route::get('/add-empresa', 'EmpresaController@addEmpresa');

Route::post('/cadastrarProduto', 'ProdutoController@cadastrarProduto')->name('produto.cadastrar');

Route::post('/cadastrarempresa', 'EmpresaController@cadastrarEmpresa')->name('empresa.cadastrar');

Route::post('/cadastrarmaterial', 'MaterialController@cadastrarMaterial')->name('material.cadastrar');

Route::post('/cadastrarcidade', 'CidadesController@cadastrarCidade')->name('cidade.cadastrar');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');




