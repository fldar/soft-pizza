@extends('layout.site')

@section('titulo','Home')

@section('conteudo')

<section>
        <div class="container padding-container">
          <div class="row centralizar-conteudo">
            <div class="col-md-8">

              <article>

                <div>
                  <h3 class="titulo-pagina">
                    Forma de pagamento
                  </h3>

                  <div class="informacoes">

                    <div class="tela-texto">

                      <fieldset class="total">
                        <h2>Total: R$<span>{{number_format($pedido->ValorTotal,2,",",".")}}</span> </h1>
                      </fieldset>

                      <!------------------------------------------------------------------------------------------------>

                      <fieldset class="pagamento">

                        <!------------------------------------------------------------------------------------------------>


                        <form class="" action="{{route('pedidos.pagamento', $pedido->id)}}" method="post">
                          @csrf
                          <input name ="FormaPagamento" type="hidden" value="Dinheiro" >
                          <div class="botao-pag">
                           <button type="submit" class="btn btn-primary btn-lg btn-block pag pag-verde">Dinheiro</button>
                          </div>
                        </form>

                        <form class="" action="{{route('pedidos.pagamento', $pedido->id)}}" method="post">
                          @csrf
                          <input name ="FormaPagamento" type="hidden" value="Crédito" >
                          <div class="botao-pag">
                           <button type="submit" class="btn btn-primary btn-lg btn-block pag pag-azul">Crédito</button>
                          </div>
                        </form>

                        <form class="" action="{{route('pedidos.pagamento', $pedido->id)}}" method="post">
                          @csrf
                          <input name ="FormaPagamento" type="hidden" value="Débito" >
                          <div class="botao-pag">
                           <button type="submit" class="btn btn-primary btn-lg btn-block pag pag-roxo">Débito</button>
                          </div>
                        </form>

                        <!------------------------------------------------------------------------------------------------>

                      </fieldset>

                      <!------------------------------------------------------------------------------------------------>


                  </div>

                </div><!-- fildsets -->

              </article>

            </div><!-- col -->
          </div><!-- row -->

        </div><!-- container -->
      </section>

@endsection
