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
               Cadastre-se
             </h3>

        <form id="CadastroClientes" class="" action="{{route('clientes.salvar')}}" method="post">
          @csrf
           <div class="informacoes">
             <fieldset class="block">

               <div class="container">



                   <div class="col-sm-12">
                     @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                   </div>


                   <div class="row">

                     <div class="col-sm-7">
                       <div class="form-group">
                         <label for="nome">Nome</label>
                         <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex.: João Paulo"
                         value="" maxlength="230" required>
                       </div>
                     </div>

                     <div class="col-sm-5">
                       <div class="form-group">
                         <label for="email">E-mail</label>
                         <input type="email" class="form-control" id="email" name="email" placeholder="email@email.com.br"
                         value="" maxlength="100" required>
                       </div>

                     </div>

                     <div class="col-sm-6">
                       <div class="form-group">
                         <label for="telefone">Telefone</label>
                         <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone com DDD"
                         value="" maxlength="19" required>
                       </div>
                     </div>

                     <div class="col-sm-6">
                       <div class="form-group">
                         <label for="senha">Senha</label>
                         <input type="password" class="form-control" id="senha" name="password" placeholder="Informe a sua senha"
                         value="" maxlength="190" required>
                       </div>
                     </div>

                     <div class="col-sm-4">
                       <div class="form-group">
                         <label for="cep">Cep</label>
                         <input type="text" class="form-control" id="cep" name="cep"
                         value="" maxlength="11" required>
                       </div>
                     </div>

                     <div class="col-sm-8">
                       <div class="form-group">
                         <label for="rua">Rua</label>
                         <input type="text" class="form-control" id="rua" name="rua"
                         value="" maxlength="49" required>
                       </div>
                     </div>

                     <div class="col-sm-4">
                       <div class="form-group">
                         <label for="numero">Número</label>
                         <input type="number" class="form-control" id="numero" name="numero"
                         value="" maxlength="50" required>
                       </div>
                     </div>

                     <div class="col-sm-8">
                       <div class="form-group">
                         <label for="complemento">Complemento</label>
                         <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Ex.: ao lado de, perto de, em frente ao"
                         value="" maxlength="149" required>
                       </div>
                     </div>

                     <div class="col-sm-5">
                       <div class="form-group">
                         <label for="bairro">Bairro</label>
                         <input type="text" class="form-control" id="bairro" name="bairro"
                         value="" maxlength="191" required>
                       </div>
                     </div>

                     <div class="col-sm-4">
                       <div class="form-group">
                         <label for="cidade">Cidade</label>
                         <input type="text" class="form-control" id="cidade" name="cidade"
                         value="" maxlength="49" required>
                       </div>
                     </div>

                     <div class="col-sm-3">
                       <div class="form-group">
                         <label for="uf">UF</label>
                         <select class="form-control" id="uf" name="uf">
                           <option>AC</option>
                           <option>AL</option>
                           <option>AP</option>
                           <option>AM</option>
                           <option>BA</option>
                           <option>CE</option>
                           <option>DF</option>
                           <option>ES</option>
                           <option>GO</option>
                           <option>MA</option>
                           <option>MT</option>
                           <option>MS</option>
                           <option>MG</option>
                           <option>PA</option>
                           <option>PB</option>
                           <option>PR</option>
                           <option>PE</option>
                           <option>PI</option>
                           <option>RJ</option>
                           <option>RN</option>
                           <option>RS</option>
                           <option>RO</option>
                           <option>RR</option>
                           <option>SC</option>
                           <option>SP</option>
                           <option>SE</option>
                           <option>TO</option>
                         </select>
                       </div>
                     </div>

                   </div> <!-- fim da row -->


                   <div class="form-row">
                     <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
                   </div>

                   </form>
               </div>

             </div><!-- fildsets -->
           </div><!-- informações -->


         </article>

       </div><!-- col -->
     </div><!-- row -->

   </div><!-- container -->
 </section>
@endsection
