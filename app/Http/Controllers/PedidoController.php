<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\ItensPedido;
use Illuminate\Http\Request;
use App\Models\Produto;
use DB;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('vendas.index',compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function salvar(Request $request)
    {
      $dados = $request->all();
      $pedido = Pedido::create($dados);
      $produtos = Produto::all();

      return view('clientes.pedidos-produtos',compact('produtos'),compact('pedido'));
    }





    public function finalizar($id)
    {
        $valor_total = DB::table('itens_pedidos')->where('id_pedido', '=', $id)->sum('preco_item');
        $pedido = Pedido::find($id);
        $pedido->ValorTotal = $valor_total;
        $pedido->save();

        return view('clientes.pedido-finalizar',compact('pedido'));
    }

    public function pagamento(Request $req, $id)
    {

        $bolet = $req->FormaPagamento;
        $pedido = Pedido::find($id);
        $pedido->FormaPagamento = $bolet;
        $pedido->save();
        $cliente = Cliente::find($pedido->cliente_id);
        $itensPedido = ItensPedido::all()->where('id_pedido', $pedido->id);

        return view('clientes.resumo',compact('itensPedido', 'cliente', 'pedido'));
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
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
