@section('complementar')

<div class="container">
        {!! Form::open(['action' => 'EmpresasController@create', 'method' => 'get', 'autocomplete' => 'off']); !!}
   <div class="row">
        <div class="col s12 l6 m6">
                <div class="row">
                   <div class="col s12 l6 m6">
                        <h3>Informações da empresa</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::text('empresa_nome') !!} <br>
                        {!! Form::label('name', 'Nome da empresa: ') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::text('estab_email') !!} <br>
                        {!! Form::label('name', 'Email empresarial: ') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::text('empresa_fone') !!} <br>
                        {!! Form::label('name', 'Telefone para contato: ') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::text('empresa_ender') !!} <br>
                        {!!Form::label('Endereço:')!!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::text('tipo_servico') !!} <br>
                        {!! Form::label('name', 'Tipo de serviço: ') !!}
                    </div>
                </div>
        </div>
        <div class="col s12 l6 m6">
                        <div class="row">
                            <div class="col s12 l6 m6">
                                <h3>Informações do representante</h3>
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
            </div>

    </div>
        </form>
        <div class="row">
            <div class="col s12 l12 m12">
        {{ Form::submit('enviar', array ('class' => 'btn waves-effect waves-light right')) }}
      </div>
    </div>
  </div>

 {!! Form::close() !!} 

  {{-- Verificação e apresentação de erros --}}
  @if( $errors->any() )
    <ul class='alert alert-danger'>
      @foreach( $errors->all() as $error )
        <li>{{ $error }} </li>
      @endforeach
    </ul>
  @endif

@show
