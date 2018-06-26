@extends('layout.site')

@section('titulo','Home')

@section('conteudo')

<section>
        <div class="container padding-container">
          <div class="row centralizar-conteudo">
            <div class="col-sm-8">

              <article class="article-center">
                <div>
                  <h3 class="titulo-pagina">
                    Resumo do pedido
                  </h3>
                </div>

                <div class="informacoes">
                  <fieldset class="block">
                    <legend>pedido: {{$pedido->id}} <br>{{$cliente->nome}}</legend>
                    <p>
                      @foreach($itensPedido as $itens)
                        <span class="fonte-maior">{{$itens->nome}}</span><br>
                      @endforeach
                    </p>
                  </fieldset>

                  <fieldset class="block fieldset-slim">
                    <legend>endereço</legend>
                      <p>{{$cliente->rua}},</p>
                      <p>número {{$cliente->numero}},</p>
                      <p>{{$cliente->bairro}},</p>
                      <p>{{$cliente->complemento}}</p>
                  </fieldset>


                  <fieldset class="fieldset-slim">
                    <legend>pagamento</legend>
                      <p>{{$pedido->FormaPagamento}}</p>
                  </fieldset>
                  <br>

                </div><!-- fildsets -->

              </article>

            </div><!-- col -->
          </div><!-- row -->

        </div><!-- container -->
      </section>


@endsection
