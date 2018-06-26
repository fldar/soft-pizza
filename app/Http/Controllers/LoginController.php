<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{

  use AuthenticatesUsers;

  protected $redirectTo = '/home';

  public function __construct()
  {
    $this->middleware('guest', ['excpet' => 'logout']);
  }

  public function showLoginForm()
  {
    return view('clientes.entrar');
  }
}
