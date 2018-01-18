<div class="section black-text">
							<div class="row"><h3 style="text-shadow: 3px 3px  4px black;">FALE CONOSCO</h3></div>
							<div class="divider"></div>
								<form class="col s12 m12 l12">
								{!! Form::open(['url' => 'FaleConosco', 'method' => 'post', 'autocomplete' => 'off']); !!}
									<div class="row">
										<div class="input-field col s12 l6 m6">
										    <i class="material-icons prefix">account_circle</i>
											{!! Form::text('username') !!} <br>
											{!! Form::label('name', 'Nome (ou empresa): ') !!}
										</div>
								
                                        <div class="input-field col s12 l6 m6">
                                            <i class="material-icons prefix">call</i>
                                                {!! Form::text('userfone') !!} <br>
                                                {!! Form::label('fone', 'Telefone: ') !!}			
										</div>
									</div>
									<div class="row">
                                        <div class="input-field col s12 l6 m6">
                                            <i class="material-icons prefix">email</i>
                                                {!! Form::email('usermail') !!} <br>
                                                {!! Form::label('email', 'Email: ') !!}			
                                        </div>
									
										<div class="input-field col s12 l6 m6">
											<i class="material-icons prefix">chat_bubble</i>
												{!! Form::text('textarea') !!} <br>
                                                {!! Form::label('mensagem', 'Mensagem: ') !!}	
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