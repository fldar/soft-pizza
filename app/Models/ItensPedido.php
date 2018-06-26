<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItensPedido extends Model
{
  protected $fillable = [
    'id',
    'nome',
    'id_pedido',
    'id_produto',
    'preco_item',
    'quantidade_produto'
  ];

  protected  $table = 'itens_pedidos';
}
