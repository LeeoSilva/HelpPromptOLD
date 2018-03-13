<body>
<div class="section black-text">
						<div class="container">
							<div class="row"><h2 style="text-shadow: 3px 3px  4px black; margin-top: -70px;">QUER TRABALHAR CONOSCO?</h2></div><br><br>
							<div class="divider"></div>
</div>
<div class="row">
<center><div class="col s12 l3 m3" background="./numeroum.png">
	<div class="cima"></div>
			<div class="meio">
				<h5>CADASTRE SEU ESTABELECIMENTO</h5>
			</div>
	<div class="baixo"></div>
</div></center>

<center><div class="col s12 l3 m3" background="numerodois.png">
	<div class="cima"></div>
		<div class="meio">
			<h5>ENTRAMOS EM CONTATO E FECHAMOS CONTRATO</h5>
		</div>
	<div class="baixo"></div>
</div></center>

<center><div class="col s12 l3 m3" background="numero3tres.png">
	<div class="cima"></div>
		<div class="meio">
			<h5>CONFIGURAMOS SUA EMPRESA PARA O HELPPROMPT</h5>
		</div>
	<div class="baixo"></div>
</div></center>

<center><div class="col s12 l3 m3" background="numeroquatro.png">
	<div class="cima"></div>
		<div class="meio">
			<h5>E JÁ ESTÁ PRONTO!</h5>
		</div>
	<div class="baixo"></div>
</div></center>
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

</div>


<style>
.cima{
height: 40%;
}
.meio{
height: 20%;
}
.baixo{
height: 40%;
}
</style>
