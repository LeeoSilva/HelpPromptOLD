@section('contento')
<div class="modal-body">
		<form class="col s12 m12 l12">
		{!! Form::open(['url' => 'Login', 'method' => 'post', 'autocomplete' => 'off']); !!}
		<div class="row" >
			<div class="input-field col s12 l12 m12">
				{!! Form::text('usr_name'); !!}
				{!! Form::label('usr_mail', 'Usuário ou Email: '); !!}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12 l12 m12">
				{!! Form::password('usr_pass'); !!}
				{!! Form::label('pass', 'Senha: '); !!}			
		</div>	
		</form>
	</div>
</div>
	{!! Form::close() !!}

	{{--  TODO: Remember Me Token  --}}

	{{-- Verificação e apresentação de erros --}}
	@if( $errors->any() )
		<ul class='alert alert-danger'>
			@foreach( $errors->all() as $error )
				<li>{{ $error }} </li>
			@endforeach
		</ul>
	@endif

	@show