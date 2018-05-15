@section('complementar')
<html>
  <head>
    <meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Help Prompt</title>
		<link rel="stylesheet" href="css/materialize.css">
		<link rel=icon href=./Logo/logobrancasemfundo.png>
  </head>
  <body>

        <!-- Cabeçalho -->
        <div>
            @include('HtmlWraps.headerWork');
		</div>
		<!-- Fim do Cabeçalho -->
    
    <div class="container">
            {!! Form::open(['action' => 'EmpresasController@create', 'method' => 'get', 'autocomplete' => 'off']); !!}
       <div class="row">
            <div class="col s12 l6 m6">
                    <div class="row">
                       <div class="col s12 l12 m12">
                            <br><h2>Informações da empresa</h2><br><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 l12 m12">
                            {!! Form::text('empresa_nome') !!} <br>
                            {!! Form::label('name', 'Nome da empresa: ') !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 l12 m12">
                            {!! Form::text('estab_email') !!} <br>
                            {!! Form::label('name', 'Email empresarial: ') !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 l12 m12">
                            {!! Form::text('empresa_fone') !!} <br>
                            {!! Form::label('name', 'Telefone para contato: ') !!}
                        </div>
                    </div>

                    <div class="row">
                       <div class="col s12 l12 m12">
                            <br><h2>Endereço da empresa</h2><br><br>
                        </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s12 l12 m12">
                        {!! Form::text('empresa_cidade') !!} <br>
                        {!!Form::label('Cidade:')!!}
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s12 l12 m12">
                        {!! Form::text('empresa_bairro') !!} <br>
                        {!!Form::label('Bairro:')!!}
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s12 l12 m12">
                        {!! Form::text('empresa_ender') !!} <br>
                        {!!Form::label('Endereço:')!!}
                      </div>
                    </div>

            </div>
                <div class="col s12 l6 m6">
                            <div class="row">
                                <div class="col s12 l12 m12">
                                    <br><h2>Informações do representante</h2><br><br>
                                </div>
                            </div>

                    <div class="row">
                        <div class="input-field col s12 l12 m12">
                            {!! Form::text('represent_nome') !!} <br>
                            {!! Form::label('name', 'Nome Completo: ') !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 l12 m12">
                            {!! Form::email('represent_mail') !!} <br>
                            {!! Form::label('email', 'Email: ') !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 l12 m12">
                            {!! Form::text('represent_cel') !!} <br>
                            {!! Form::label('fone', 'Telefone: ') !!}
                        </div>
                    </div>

                    <div class="col s12 l12 m12">
                            <div class="row">
                                <div class="col s12 l12 m12">
                                    <br><h2>Informações adicionais</h2><br><br>
                                </div>
                            </div>

                    <div class="row">
                        <div class="input-field col s12 l12 m12">
                            {!! Form::text('tipo_servico') !!} <br>
                            {!! Form::label('name', 'Tipo de serviço: ') !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 l12 m12">
                            {!! Form::text('quant_guinchos') !!} <br>
                            {!! Form::label('name', 'Quantidade de guinchos: ') !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 l12 m12">
                            {!! Form::text('quant_motoristas') !!} <br>
                            {!! Form::label('name', 'Quantidade de motoristas: ') !!}
                        </div>
                    </div>
                </div>

        </div>
            </form>
            <div class="row">
                <div class="col s12 l12 m12">
                    {{ Form::submit('ENVIAR', array ('class' => 'btn right blue')) }}
          </div>
        </div>
      </div>
 {!! Form::close() !!}
</body>
</html>

@include('HtmlWraps.errors')

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript" language="javascript" >

<style>
body{
  background-color: #FBFBFB;
}

h2{
	  font-family: 'Josefin Sans', serif;
		text-shadow: 2px 1px 2px black;"
}
</style>
@show
