<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
  protected $fillable = [
  'id',
  'nome',
  ];

  protected  $table = 'grupos';
}
