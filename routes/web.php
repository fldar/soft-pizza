<?php

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

Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);

Route::post('/clientes/salvar',['as'=>'clientes.salvar','uses'=>'ClienteController@salvar']);

Route::get('/clientes/entrar',['as'=>'clientes.entrar','uses'=>'ClienteController@entrar']);

Route::post('/pedido/salvar',['as'=>'pedido.salvar','uses'=>'PedidoController@salvar']);

Route::post('/itens-pedido/adicionar',['as'=>'itens-pedido.adicionar','uses'=>'ItensPedidoController@adicionar']);

Route::get('/clientes/pedido',['as'=>'clientes.pedido','uses'=>'ClienteController@pedido']);

Route::get('/cliente/pedido/produtos',['as'=>'clientes.pedido.produto','uses'=>'ClienteController@pedidoProduto']);

Route::get('/pedidos/finalizar/{id}',['as'=>'pedidos.finalizar','uses'=>'PedidoController@finalizar']);

Route::post('/pedidos/pagamento/{id}',['as'=>'pedidos.pagamento','uses'=>'PedidoController@pagamento']);









// GRUPO ========================================================================
Route::get('/grupos/cadastrar',['as'=>'grupos.cadastrar','uses'=>'GrupoController@cadastrar']);
Route::post('/grupos/salvar',['as'=>'grupos.salvar','uses'=>'GrupoController@salvar']);
//ENDGRUPO ========================================================================

// GRUPO ========================================================================
Route::get('/produtos/cadastrar',['as'=>'produtos.cadastrar','uses'=>'ProdutoController@cadastrar']);
Route::post('/produtos/salvar',['as'=>'produtos.salvar','uses'=>'ProdutoController@salvar']);
//ENDGRUPO =======================================================================

//VEMDA ====================================================================
Route::get('/vendas',['as'=>'vendas','uses'=>'PedidoController@index']);
//ENDVEMDA ==================================================================

// LOGUIN ==============================================================================
Route::get('/login',['as'=>'login','uses'=>'LoginController@fazerLogin']);
// ENDLOGUIN ========================================================================

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
