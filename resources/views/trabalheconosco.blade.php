<div class="section black-text">
							<div class="row"><h3 style="text-shadow: 3px 3px  4px black;">TRABALHE CONOSCO</h3></div>
							<div class="divider"></div>
								<form class="col s12 m12 l12" action="work.blade.php">
								{!! Form::open(['url' => 'TrabalheConosco', 'method' => 'post', 'autocomplete' => 'off']); !!}
									<div class="row">
										<div class="input-field col s12 l12 m12">
										    <i class="material-icons prefix">account_circle</i>
											{!! Form::text('username') !!} <br>
											{!! Form::label('name', 'Nome (ou empresa): ') !!}
										</div>
									</div>

									<div class="row">
										<div class="input-field col s12 l12 m12">
										<i class="material-icons prefix">email</i>
											{!! Form::email('usermail') !!} <br>
											{!! Form::label('email', 'Email: ') !!}			
										</div>
									</div>

									<div class="row">	
										<div class="input-field col s12 l12 m12">
										<i class="material-icons prefix">call</i>
											{!! Form::text('userfone') !!} <br>
											{!! Form::label('fone', 'Telefone: ') !!}			
										</div>
									</div>

									<div class="row">
										<div class="input-field col s12 l12 m12">
										<i class="material-icons prefix">room</i>
											{!! Form::text('userlocation') !!}
                                            {!!Form::label('Endereço:')!!}
										</div>
									</div>	
                                    <div class="row">
										<div class="input-field col s12 l12 m12">
										<button class="btn waves-effect waves-light right" type="submit" name="action">Enviar
                                            <i class="material-icons right">send</i>
                                        </button>
										</div>
									</div>
                                    
								</form>
								{!! Form::close() !!}
</div>