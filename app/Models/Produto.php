<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
  protected $fillable = [
  'id',
  'nome',
  'descricao',
  'id_grupo',
  'id_composicao',
  'preco_custo',
  'preco_venda'
  ];

  protected  $table = 'produtos';
}
