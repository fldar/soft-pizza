<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function entrar(){
      return view('clientes.entrar');
    }

    public function salvar(ClienteRequest $req){
      $dados = $req->all();
      Cliente::create($dados);
      return redirect()->route('clientes.pedido');
    }

    public function pedido()
    {
      $pizzas = Produto::all();
      $clientes = Cliente::all();
      return view('clientes.pedido',compact('pizzas'),compact('clientes'));
    }

   public function __construct()
   {
    //  $this->middleware('auth:cliente');
   }
}
