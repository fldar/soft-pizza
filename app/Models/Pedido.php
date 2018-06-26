<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
      'id',
      'cliente_id',
      'ValorTotal',
      'FormaPagamento',
      'cancelado',
      'entregue'
    ];

    protected  $table = 'pedidos';
}
