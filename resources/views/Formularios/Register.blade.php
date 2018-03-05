@section('contente')
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
	<div class="row">
    <form class="col s12 m12 l12">
        {!! Form::open(['url' => 'User/create', 'method' => 'post', 'autocomplete' => 'off']) !!}
        <div class="input-field col s6 m6 l6">
        {!! Form::text('username') !!} <br>
        {!! Form::label('name', 'Nome: ') !!}
        </div>

        <div class="input-field col s6 l6 m6">
            {!! Form::text('usercpf') !!} <br>
            {!! Form::label('cpf', 'CPF: ') !!}
        </div>

    <div class="input-field col s6 m6 l6">
        {!! Form::password('userpass') !!} <br>
        {!! Form::label('pass', 'Senha: ') !!}
    </div>

    <div class="input-field col s6 m6 l6">
        {!! Form::email('usermail') !!} <br>
        {!! Form::label('email', 'Email: ') !!}
    </div>


    </form>
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
