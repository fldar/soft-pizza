<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Eloquent;

class Cliente extends Eloquent  implements Authenticatable
{
      use AuthenticableTrait;
      
      protected $guard = 'cliente';
      protected $fillable = [
         'password',
         'nome',
         'email',
         'telefone',
         'cep',
         'complemento',
         'numero',
         'rua',
         'uf',
         'cidade',
         'bairro'
    ];
    protected $table = 'clientes';
}
