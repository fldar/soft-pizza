<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Models\Cliente;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

  public function login()
  {

  }

  public function showLoginForm()
  {
    return view('clientes.entrar');
  }

}
