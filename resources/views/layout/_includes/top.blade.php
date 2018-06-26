<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<title>EntreGO! Pizzas - Entrar</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous">
<link rel="stylesheet" href="{{asset("css/estilo.css")}}">
<link rel="stylesheet" href="{{asset("sweetalert2/dist/sweetalert2.min.css")}}">
<link rel="icon" href="{{asset("bootstrap/assets/img/icon.png")}}">

</head>

<body>

  <!------------------------------------------ BARRA DE NAVEGAÇÃO -->

       <nav class="navbar navbar-expand-lg navbar-light fixed-top cabecalho">
         <div class="container">

           <!-- LOGO -->
           <a href="index.html">
             <img class="img-responsive img" src="{{asset("bootstrap/assets/img/entrego_logop.png")}}">
           </a>

           <!-- BOTAO TOGGLE -->
           <button class="navbar-toggler botao-toggle" type="button"
                   data-toggle="collapse" data-target="#barra-navegacao"
                   aria-controls="barra-navegacao" aria-expanded="false" aria-label="Toggle navigation">
             MENU
             <!-- <span class="navbar-toggler-icon"></span> -->
           </button>

           <!-- MENU -->
           <div class="collapse navbar-collapse" id="barra-navegacao">

             <ul class="navbar-nav ml-auto">
               <li class="nav-item"> <a class="nav-link" href="{{route('clientes.entrar')}}"> Criar conta </a> </li>
               <li class="nav-item"> <a class="nav-link" href="{{route('clientes.pedido')}}"> Pedido </a> </li>
             </ul>

           </div>
         </div>
       </nav>
