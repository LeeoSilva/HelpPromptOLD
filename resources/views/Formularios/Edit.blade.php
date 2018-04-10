@section('content')
	<h1>Update user number {{ $info->id }}</h1>

	<hr>

	<div class='form-group'>
	{!! Form::open(['url' => 'User/edition/' . $info->id,
							 'method' => 'post',
							 'autocomplete' => 'off']); !!}

	{!! Form::label('ip', 'Ipv4 Address: '); !!}
	{!! Form::text('usr_ip', $info->usr_ip); !!}<br>

	{!! Form::label('name', 'Username: '); !!}
	{!! Form::text('usr_name', $info->usr_name); !!}<br>
	
	{!! Form::label('pass', 'Password: '); !!}
	{!! Form::password('usr_pass'); !!}<br>

	{{--  TODO - Check me to show password without encryption  --}}

	{{--  {!! Form::checkbox('') !!}  --}}


	{!! Form::label('mail', 'Email: '); !!}
	{!! Form::text('usr_mail', $info->usr_mail); !!}<br>

	{!! Form::label('cpf', 'CPF: '); !!}
	{!! Form::text('usr_cpf', $info->usr_cpf); !!}<br>

	{!! Form::label('userbirth', 'Nascimento: '); !!}
	{!! Form::date('usr_birth', $info->usr_birth); !!}<br><br>

	{!! Form::label('usr_level', 'Nível de usuário: '); !!}<br>

	{!! Form::label('Dedo Duro'); !!}
	{!! Form::radio('usr_level', '0'); !!}<br>

	{!! Form::label('SysAdmin'); !!}
	{!! Form::radio('usr_level', '1'); !!}<br>

	{!! Form::label('Oficina'); !!}
	{!! Form::radio('usr_level', '2'); !!}<br>

	{!! Form::label('Seguradora'); !!}
	{!! Form::radio('usr_level', '3'); !!}<br>

	{!! Form::label('Segurado'); !!}
	{!! Form::radio('usr_level', '4', true); !!}<br><br>


	{!! Form::submit('Enviar', ['class' => 'btn btn-success']); !!}
	{!! Form::close() !!}
	</div>

	@include('HtmlWraps.errors')

@show