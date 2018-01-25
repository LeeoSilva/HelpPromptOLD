@section('principal')
<html>
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Help Prompt</title>
		<link rel="stylesheet" href="css/materialize.css">
		<link rel=icon href=./Logo/logobrancasemfundo.png>
	</head>
	<body>

		<!-- Cabeçalho -->
		<div>
		@include('HtmlWraps.header')
		</div>
		<!-- Fim do Cabeçalho -->
		<!--Início -->
		<div class="container-fluid scrollup">
			<div id="index-banner" class="parallax-container1" >
				<div class="section no-pad-bot" >
					<div class="container">
						<br><br><br><br><br><br><br>
						<h1 class="header col s12 center teal-text text-lighten-2" style="text-shadow: 7px 7px  8px black;">Help Prompt</h1>
						<div class="row center">
							<h5 class="header col s12 light white-text" style="text-shadow: 3px 3px  4px black;"><strong>Sempre atentos à você!</strong></h5>
						</div>
						<div class="row">
							@include('HtmlWraps.modal');
							<br><br>
						</div>
					</div>
					<div class="parallax"><img src="fundo.jpg"></div>
				</div>
			</div>
			<!-- Fim do Início -->

			<!-- Bloco sobre  -->
			<div class="container-fluid" id="sobre">
				<div>
					<a name="sobre">
						<div class="section">
							<div class="container">
								<div class="row"><h3 class="black-text" style="text-shadow: 3px 3px  4px black;">SOBRE  </h3></div>
								<div class="divider"></div>
								<div class="row">
									<div class="col s12 m4 l4 left">
										<img src="Logo/logobrancasemfundo.png" class="responsive-img" style="text-align: center">
									</div>
									<div class="col s12 m8 l8 right" style="padding-left: 10px; padding-right: 10px;">
										<div class="bloco">
											<h3 class="center-align light flow-text black-text" style="line-height: 150%; ">Help Prompt é um aplicativo desenvolvido pela empresa Keys & Kases, que tem como desafio facilitar a vida de quem procura uma oficina mecânica mais próxima e um maior gosto financeiro. Help Prompt também tem a capacidade de calcular o tempo de trajeto para a chegada de um prestador de serviço até você.</h3>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- Fim do Bloco sobre -->

				<!-- Parallax -->
				<div class="parallax-container valign-wrapper">
						<div class="section no-pad-bot">
							<div class="container">
								<div class="row center">
								</div>
							</div>
						</div>
					<div class="parallax"><img src="fundo2.jpg" alt="Unsplashed background img 2"></div>
			  </div>
			  <!-- Fim do Parallax -->

				<!-- Trabalhe conosco -->
					<div class="container" id="trabalheconosco">
						<a nome="trabalheconosco">
							@include('Formularios.trabalheconosco')
					</div>
				<!-- Fim do Trabalhe conosco -->

				<!-- Parallax -->
				<div class="parallax-container valign-wrapper">
					<div class="section no-pad-bot">
						<div class="container">
							<div class="row center">
							</div>
						</div>
					</div>
					<div class="parallax"><img src="fundo3.jpg" alt="Unsplashed background img 2"></div>
				</div>
				<!-- Fim do Parallax -->

				<!-- Bloco parceiros -->
				<div class="container" id="parceiros">
					<a name="parceiros">
						<div class="section black-text">
							<div class="row"><h3 style="text-shadow: 3px 3px  4px black;">PARCEIROS</h3></div>
							<div class="divider"></div>
							<div class="row">
								<div class="col s12 m4 l4 white">
									<div class="icon-block">
										<h2 class="center brown-text"><img src="Parceiros/etec.png" class="parceiros"></h2>
										<h5 class="center">Etec Antonio Devisate</h5>
										<p class="light" style="text-align: center; padding: 5px;">Escola Técnica Estadual</p>
									</div>
								</div>
								<div class="col s12 m4 l4 white">
									<div class="icon-block">
										<h2 class="center brown-text"><img src="Parceiros/ciem.png" class="parceiros"></h2>
										<h5 class="center">Ciem Marília</h5>
										<p class="light" style="text-align: center; padding: 5px;">Centro Incubador de Empresas de Marília (CIEM - Marília)</p>
									</div>
								</div>
								<div class="col s12 m4 l4 white">
									<div class="icon-block">
										<h2 class="center brown-text"><img src="Parceiros/citec.png" class="parceiros"></h2>
										<h5 class="center">Citec Marília</h5>
										<p class="light" style="text-align: center; padding: 5px;">Centro de Inovação Técnológico de Marília (CITEC - Marília) </p>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>


			<!-- Fim do Bloco parceiros -->

			<!-- Parallax -->
			<div class="parallax-container valign-wrapper">
						<div class="section no-pad-bot">
							<div class="container">
								<div class="row center">
								</div>
							</div>
						</div>
					<div class="parallax"><img src="fundo4.jpg" alt="Unsplashed background img 2"></div>
			  </div>
			  <!-- Fim do Parallax -->

			<!-- Bloco Fale conosco -->
					<div class="container" id="faleconosco">
						<a nome="faleconosco">
							@include('Formularios.faleconosco')
					</div>
			<!-- Bloco Fale conosco -->

			<!-- Button fixo -->
				@include('HtmlWraps.button')
			<!-- Fim do Button fixo -->

			<!-- Rodapé -->
				@include('HtmlWraps.rodape')

			<!-- Fim do Rodapé -->
			<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
			<script type="text/javascript" src="js/materialize.js"></script>

			<!-- JavaScript -->
			<script type="text/javascript" language="javascript" >
				$('#modal1').modal();
				$('#modal2').modal();
				$('#modal3').modal();
				$('.parallax').parallax();

				// Inicio da navbar
				$('.button-collapse').sideNav({
					menuWidth: 300, // Default is 300
					edge: 'left', // Choose the horizontal origin
					closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
					draggable: true, // Choose whether you can drag to open on touch screens,
				});
				// Final da navbar
				

				$(document).ready(function() {
					$('select').material_select();
				});
				</script>
			<script type="text/javascript" src="javascript.js"></script>

			<!-- Fim do JavaScript -->
<style>
h1{
	font-size:
}

</style>
		</body>
	</html>
@show
