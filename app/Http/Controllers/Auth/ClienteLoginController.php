<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ClienteLoginController extends Controller
{


    public function __construct()
    {
        $this->middleware('guest:cliente');
    }

    public function showLoginForm()
    {
      return view('clientes.entrar');
    }

    public function login(Request $request)
    {

      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required'
      ]);

      if (Auth::guard('cliente')->attempt(['email' => $request->email, 'password' => $request->password])) {
          return redirect()->intended(route('home'));
      }

      return 'erro no login';


    }



}
