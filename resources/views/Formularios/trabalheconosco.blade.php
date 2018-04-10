@section('trabalheconosco')
<body>
	<div class="section black-text">
		<div class="container">
			<div class="row"><h2 style="text-shadow: 3px 3px  4px black; padding: 10% 0% 0% 0%;">QUER TRABALHAR CONOSCO?</h2></div><br><br>
	</div>

<div class="row">
	<center><div class="col s12 l3 m3" id="primeiro">
		<div class="cima" class="primeiro"></div>
				<div class="meio">
					<h5 class="position">CADASTRE SEU ESTABELECIMENTO</h5>
				</div>
		<div class="baixo"></div>
	</div></center>

<center><div class="col s12 l3 m3" id="segundo">
	<div class="cima"></div>
		<div class="meio">
			<h5 class="position2">ENTRAMOS EM CONTATO E FECHAMOS CONTRATO</h5>
		</div>
	<div class="baixo"></div>
</div></center>

<center><div class="col s12 l3 m3" id="terceiro">
	<div class="cima"></div>
		<div class="meio">
			<h5 class="position3">CONFIGURAMOS SUA EMPRESA PARA O HELPPROMPT</h5>
		</div>
	<div class="baixo"></div>
</div></center>

<center><div class="col s12 l3 m3" id="quarto">
	<div class="cima"></div>
		<div class="meio">
			<h5 class="position4">E JÁ ESTÁ PRONTO!</h5>
		</div>
	<div class="baixo"></div>
</div></center>

		</div>
	</div>
</div>

@include('HtmlWraps.errors')

@show

<style>
.cima{
height: 20%;
}
.meio{
height: 15%;
background-color: white;
}
.baixo{
height: 20%;
}
.position{
	padding: 5% 0% 5% 0%;
}
.position2{
	padding: 2% 0% 2% 0%;
}
.position3{
	padding: 2% 0% 2% 0%;
}
.position4{
	padding: 10% 0% 10% 0%;	
}
#primeiro{
	background-image: url('numeros1.png');
	background-repeat: no-repeat;
	background-position: center;
	background-size:contain; 
    border-style: solid;
	border-radius: 8%;
	margin: 0.5% 0.5% 0.5% 2.5%;
}
#segundo{
	background-image: url('numeros2.png');
	background-repeat: no-repeat;
	background-position: center;  
	background-size:contain; 
    border-style: solid;
	border-radius: 8%;
	margin: 0.5% 0.5% 0.5% 0.5%;	
}
#terceiro{
	background-image: url('numeros3.png');
	background-repeat: no-repeat;
	background-position: center;  
	background-size:contain;
    border-style: solid;
	border-radius: 8%;
	margin: 0.5% 0.5% 0.5% 0.5%; 
}
#quarto{
	background-image: url('numeros4.png');
	background-repeat: no-repeat;
	background-position: center;
	background-size:contain;   
    border-style: solid;
	border-radius: 8%;
	margin: 0.5% 2.5% 0.5% 0.5%;
}
</style>
