<body>
<div class="section black-text">
							<div class="row"><h2>TRABALHE CONOSCO</h2></div>
							<div class="divider"></div>
								<form class="col s12 m12 l12" action="Work">
								{!! Form::open(['url' => 'TrabalheConosco', 'method' => 'post', 'autocomplete' => 'off']); !!}
									<div class="row">
										<div class="input-field col s12 l6 m6">
										    <i class="material-icons prefix">account_circle</i>
											{!! Form::text('username') !!} <br>
											{!! Form::label('name', 'Nome: ') !!}
										</div>

										<div class="input-field col s12 l6 m6">
										<i class="material-icons prefix">email</i>
											{!! Form::email('usermail') !!} <br>
											{!! Form::label('email', 'Email: ') !!}
										</div>
									</div>

									<div class="row">
										<div class="input-field col s12 l6 m6">
										<i class="material-icons prefix">call</i>
											{!! Form::text('userfone') !!} <br>
											{!! Form::label('fone', 'Telefone: ') !!}
										</div>

										<div class="input-field col s12 l6 m6">
										<i class="material-icons prefix">room</i>
											{!! Form::text('tipo_servico') !!}
                                            {!!Form::label('Tipo de Serviço:')!!}
										</div>
									</div>
                                    <div class="row">
										<div class="input-field col s12 l12 m12">
											{!! Form :: submit ('enviar', array ('class' => 'btn waves-effect waves-light right')) !!}
										</div>
									</div>

								</form>
								{!! Form::close() !!}
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
