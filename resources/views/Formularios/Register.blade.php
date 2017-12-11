@section('content')
	@include('HtmlWraps.header')
	<h1>Create new User</h1>

	<hr/>


	<div class="form-group">
	{!! Form::open(['url' => 'User/create', 'method' => 'post', 'autocomplete' => 'off']); !!}

	{!! Form::text('username'); !!} <br>
	{!! Form::label('name', 'Usuário: '); !!} 

	{!! Form::password('userpass'); !!} <br>
	{!! Form::label('pass', 'Senha: '); !!} 

	{{--  TODO: CheckBox para ver a senha em texto   --}}

	{!! Form::email('usermail'); !!} <br>
	{!! Form::label('email', 'Email: '); !!}

	{!! Form::text('usercpf'); !!} <br>
	{!! Form::label('cpf', 'CPF: '); !!} 

	{!! Form::date('userbirth'); !!} <br>
	{!! Form::label('birthday', 'Nascimento: ') !!}

	{!! Form::submit('Submit', ['class' => 'btn btn-primary']); !!} <br><br>
	
	{!! Form::close(); !!}

	</div>
	</div>
	
	{{-- Verificação e apresentação de erros --}}
	@if( $errors->any() )
		<ul class='alert alert-danger'>
			@foreach( $errors->all() as $error )
				<li>{{ $error }} </li>
			@endforeach
		</ul>
	@endif

	@include('HtmlWraps.footer')
	@show
