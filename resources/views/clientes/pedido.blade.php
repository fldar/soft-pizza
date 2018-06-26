@extends('layout.site')

@section('titulo','Home')

@section('conteudo')

<section>
        <div class="container padding-container">
          <div class="row centralizar-conteudo">
            <div class="col-sm-8">

              <article>
                <div>
                  <h3 class="titulo-pagina">
                    Pedido
                  </h3>

                <div class="informacoes">
                  <fieldset class="block">

                    <div class="tela-texto">

                      <form class="" action="{{route('pedido.salvar')}}" method="post">
                        @csrf
                        <div class="form-group form-group-pedido">
                          <h3 class="h3-pedido">Se identifique</h3>
                          <select name="cliente_id"  class="form-control" id="exampleFormControlSelect1">
                            <option>...</option>
                            <optgroup>
                              @foreach($clientes as $cliente)
                              <option name="cliente_id" value="{{$cliente->id}}">{{ $cliente ->nome}}</option>
                              @endforeach
                            </optgroup>
                          </select>
                        </div>

                        <div class="form-row">
                          <button type="submit" class="btn btn-primary btn-lg btn-block">Avançar</button>
                        </div>
                        </div>

                      </form>

                    </div>
                </div><!-- fildsets -->

              </article>

            </div><!-- col -->
          </div><!-- row -->

        </div><!-- container -->
      </section>

@endsection
