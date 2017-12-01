@section('content')

	@include('HtmlWraps.header')
	<h1>Login</h1>

	<hr/>

	{!! Form::open(['url' => 'Login', 'method' => 'POST', 'autocomplete' => 'off']); !!}<br>
	
	{!! Form::label('usr_mail', 'Usuário ou Email: '); !!}
	{!! Form::text('usr_name'); !!}<br>

	{!! Form::label('pass', 'Senha: '); !!}
	{!! Form::password('usr_pass'); !!}<br>
	
	{{--  TODO: Remember Me Token  --}}

	{!! Form::submit('Submit'); !!}<br>

	{!! Form::close(); !!}