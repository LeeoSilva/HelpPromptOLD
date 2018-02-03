@section('complementar')

<div class="container">
    {{-- <div class="row"> --}}
    {{-- <form class="col s6 m6 l6" > --}}
                        {{-- <div class="row">
                            <div class="col s12 l6 m6 padding-right">
                                <h3>Dados da Empresa</h3>
                            </div>
                        </div>
                <div class="row">
                    <div class="input-field col s12 l6 m6">
                      {!! Form::text('empresa_nome') !!} <br>
                      {!! Form::label('name', 'Nome: ') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::email('empresa_mail') !!} <br>
                        {!! Form::label('email', 'Email: ') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::text('empresa_fone') !!} <br>
                        {!! Form::label('fone', 'Telefone: ') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6 m6">
                      {!! Form::text('tipo_servico') !!}
                        {!!Form::label('Endereço:')!!}
                    </div>
                </div>
        </form> --}}
        {{-- <form class="col s6 m6 l6">
          {!! Form::open(['url' => 'TrabalheConosco/create',
                        'method' => 'post',
                        'autocomplete' => 'off']); !!}



                        <div class="row">
                            <div class="col s12 l6 m6">
                                <h3>Dados do Representante</h3>
                            </div>
                        </div>

                <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::text('represent_nome') !!} <br>
                        {!! Form::label('name', 'Nome Completo: ') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::email('represent_mail') !!} <br>
                        {!! Form::label('email', 'Email: ') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::text('represent_cel') !!} <br>
                        {!! Form::label('fone', 'Telefone: ') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::text('como_conheceu') !!} <br>
                        {!! Form::label('fone', 'Como Conheceu o Help Prompt: ') !!}
                    </div>
                </div>


                {{-- <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::text('userlocation') !!}
                        {!!Form::label('Endereço:')!!}
                    </div>
                </div> --}}
{{--
        </form>

    </div>
        <div class="row">
            <div class="col s12 l12 m12">
        {{ Form::submit('enviar', array ('class' => 'btn waves-effect waves-light right')) }}
      </div>
    </div>
  </div>

  {{-- {!! Form::close() !!}  --}}















  // Looh S2
  // Por algum motivo o codigo acima não funciona.
  // Então refiz aqui em baixo, e deu certo.

  {!! Form::open(['action' => 'EmpresasController@create',
                'method' => 'get',
                'autocomplete' => 'off']); !!}

  <h1>Informações da empresa</h1>

  {!! Form::label('name', 'Nome da empresa: ') !!}
  {!! Form::text('empresa_nome') !!} <br>
  {!! Form::label('name', 'Telefone para contato: ') !!}
  {!! Form::text('empresa_fone') !!} <br>
  {!! Form::label('name', 'Email empresarial: ') !!}
  {!! Form::text('estab_email') !!} <br>
  {!! Form::label('name', 'Tipo de serviço: ') !!}
  {!! Form::text('tipo_servico') !!} <br>



  <h1>Informações do representante</h1>

  {!! Form::label('name', 'Nome Completo: ') !!}
  {!! Form::text('represent_nome') !!} <br>

  {!! Form::label('email', 'Email: ') !!}
  {!! Form::email('represent_mail') !!} <br>

  {!! Form::label('fone', 'Telefone: ') !!}
  {!! Form::text('represent_cel') !!} <br>

  {!! Form::label('fone', 'Como Conheceu o Help Prompt: ') !!}
  {!! Form::text('como_conheceu') !!} <br>

  {{ Form::submit('enviar', array ('class' => 'btn waves-effect waves-light right')) }}
  {!! Form::close() !!}

  {{-- Verificação e apresentação de erros --}}
  @if( $errors->any() )
    <ul class='alert alert-danger'>
      @foreach( $errors->all() as $error )
        <li>{{ $error }} </li>
      @endforeach
    </ul>
  @endif


  <p>Se houver algum erro ao enviar o formulário me avise</p>



@show
