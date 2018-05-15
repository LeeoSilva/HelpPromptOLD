@section('faleconosco')
<body>
	<div class="section black-text">
	<br>
	<br>
	<br>
		<div class="row"><h2 style="text-shadow: 3px 3px  4px black; padding: 10% 0% 0% 0%;">FALE CONOSCO</h2></div>
			<div class="divider"></div>
			<br>
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
							<div class="col s12 l12 m12">
								{{ Form::submit('ENVIAR', array ('class' => 'btn right blue')) }}
							</div>
						</div>

				</form>
					{!! Form::close() !!}
	</div>
</body>

@include('HtmlWraps.errors')

@show

<style>
h2{
	  font-family: 'Josefin Sans', serif;
		text-shadow: 2px 1px 2px black;"
}
body{
		background-color:  #FBFBFB;
}
</style>