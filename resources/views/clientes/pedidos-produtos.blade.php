@extends('layout.site')

@section('titulo','Home')

@section('conteudo')

<section>
   <div class="container padding-container">
     <div class="row centralizar-conteudo">
       <div class="col-sm-8">

         <article> <!----------------------------------------------------------------------- cadastrar -->
           <div>
             <h3 class="titulo-pagina">
               Produtos
             </h3>

           <div class="informacoes">
             <fieldset class="block">

               <div class="container">
                   <div class="row">

                     <form class="form-inline" action="{{route('itens-pedido.adicionar', $pedido->id)}}" method="post">
                       @csrf
                         <div class="col-sm-10">
                           <div class="form-group">
                             <select name="id_produto" class="form-control" id="uf" name="uf">
                               @foreach($produtos as $produto)
                               <option name="id_produto" value="{{$produto->id}}">{{ $produto ->nome}} | {{ $produto->preco_venda}} R$</option>
                              @endforeach
                             </select>
                           </div>
                         </div>

                         <input name ="id_pedido" type = "hidden" value="{{$pedido->id}}" >

                         <div class="col-sm-2">
                           <button type="submit" class="btn btn-primary btn-sm">Adicionar Produto</button>
                         </div>


                   </div> <!-- fim da row -->
                  </form>

                       <div class="row justify-content-md-center">
                             <div class="col-sm-5">
                               <a  href="{{ route('pedidos.finalizar', $pedido->id) }}" class="btn btn-primary btn-lg btn-block">Finalizar Pedido</a>
                             </div>
                       </div>

               </div>



             </div><!-- fildsets -->



           </div><!-- informações -->




         </article>

       </div><!-- col -->
     </div><!-- row -->

   </div><!-- container -->
 </section>

@endsection
