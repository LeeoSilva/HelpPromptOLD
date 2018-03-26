<body>
<div class="section black-text">
						<div class="container">
							<div class="row"><h2 style="text-shadow: 3px 3px  4px black;">QUER TRABALHAR CONOSCO?</h2></div><br><br>
</div>
<div class="row">
<center><div class="col s12 l3 m3" id="primeiro">
	<div class="cima" class="primeiro"></div>
			<div class="meio">
				<h5>CADASTRE SEU ESTABELECIMENTO</h5>
			</div>
	<div class="baixo"></div>
</div></center>

<center><div class="col s12 l3 m3" id="segundo">
	<div class="cima"></div>
		<div class="meio">
			<h5>ENTRAMOS EM CONTATO E FECHAMOS CONTRATO</h5>
		</div>
	<div class="baixo"></div>
</div></center>

<center><div class="col s12 l3 m3" id="terceiro">
	<div class="cima"></div>
		<div class="meio">
			<h5>CONFIGURAMOS SUA EMPRESA PARA O HELPPROMPT</h5>
		</div>
	<div class="baixo"></div>
</div></center>

<center><div class="col s12 l3 m3" id="quarto">
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
background-color: white;
}
.baixo{
height: 40%;
}
#primeiro{
	background-image: url('numeros1.png');
	background-repeat: no-repeat;
	background-position: center; 
	border-width: 5px;  
    border-style: solid;
	border-radius: 10px;
	margin: 10px 10px 10px 20px;
}
#segundo{
	background-image: url('numeros2.png');
	background-repeat: no-repeat;
	background-position: center; 
	border-width:5px;  
    border-style: solid;
	border-radius: 10px;
	margin: 10px;	
}
#terceiro{
	background-image: url('numeros3.png');
	background-repeat: no-repeat;
	background-position: center;
	border-width:5px;  
    border-style: solid;
	border-radius: 10px;
	margin: 10px; 
}
#quarto{
	background-image: url('numeros4.png');
	background-repeat: no-repeat;
	background-position: center; 
	border-width:5px;  
    border-style: solid;
	border-radius: 10px;
	margin: 10px;
}
</style>
