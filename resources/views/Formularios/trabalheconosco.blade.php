<body>
<div class="section black-text">
							<div class="row"><h3 style="text-shadow: 3px 3px  4px black;">TRABALHE CONOSCO</h3></div>
							<div class="divider"></div>
								{!! Form::open(['url' => 'Empresas', 'autocomplete' => 'off', 'class' => 'col s12 m12 l12"']); !!}
									<div class="row">
										<div class="input-field col s12 l6 m6">
										    <i class="material-icons prefix">account_circle</i>
											{!! Form::text('empresa_nome') !!} <br>
											{!! Form::label('name', 'Empresa: ') !!}
										</div>

										<div class="input-field col s12 l6 m6">
										<i class="material-icons prefix">email</i>
											{!! Form::email('estab_email') !!} <br>
											{!! Form::label('email', 'Email da empresa: ') !!}
										</div>
									</div>

									<div class="row">
										<div class="input-field col s12 l6 m6">
										<i class="material-icons prefix">call</i>
											{!! Form::text('empresa_fone') !!} <br>
											{!! Form::label('fone', 'Telefone da empresa: ') !!}
										</div>

										<div class="input-field col s12 l6 m6">
										<i class="material-icons prefix">room</i>
											{!! Form::text('tipo_servico') !!}
                      {!! Form::label('Tipo de servico(FAZER):') !!}
										</div>
									</div>

									<div class="row">
										<div class="input-field col s12 l12 m12">
										<button class="btn waves-effect waves-light right" type="submit" name="action">Enviar
											<i class="material-icons right">send</i>
										</button>
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

</div>
</body>

<style>
	h2{
		  font-family: 'Josefin Sans', serif;
			text-shadow: 2px 1px 2px black;"
	}

	body{
			background-color:  #FBFBFB;
	}
</style>
