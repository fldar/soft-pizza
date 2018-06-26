<?php

namespace App\Http\Controllers;

use App\Models\ItensPedido;
use Illuminate\Http\Request;
use App\Models\Produto;
use DB;

class ItensPedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adicionar(Request $req)
    {

      $dados = $req->all();
      $itemPedido = ItensPedido::create($dados);

      $produto_temp = Produto::find($itemPedido->id_produto);
      $preco_item = $produto_temp->preco_venda;
      $nome_item = $produto_temp->nome;

      $itemDoPedido = ItensPedido::find($itemPedido->id);
      $itemDoPedido->preco_item = $preco_item;
      $itemDoPedido->nome = $nome_item;
      $itemDoPedido->save();


      $pedido1 = array('id' => $req->id_pedido,
                   'cliente_id' => 10);

      $pedido = (object)$pedido1;

      $produtos = Produto::all();
      return view('clientes.pedidos-produtos',compact('produtos'),compact('pedido'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItensPedido  $itensPedido
     * @return \Illuminate\Http\Response
     */
    public function show(ItensPedido $itensPedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItensPedido  $itensPedido
     * @return \Illuminate\Http\Response
     */
    public function edit(ItensPedido $itensPedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItensPedido  $itensPedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItensPedido $itensPedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItensPedido  $itensPedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItensPedido $itensPedido)
    {
        //
    }
}
