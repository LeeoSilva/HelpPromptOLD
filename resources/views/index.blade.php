@section('principal')
<html>
	<head>
		<script>
        $(function() {
          $.scrollify({
            section : ".example-classname",
          });
        });
      </script>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
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
		<div class="container-fluid scrollup" id="inicio">
			<div id="index-banner" class="parallax-container1" class="example-classname">
				<div class="section no-pad-bot" >
					<div class="container">
						<h1 id="titulo" class="header col s12 center" style="padding: 20% 0% 0% 0%;text-shadow: 5px 5px 5px black;font-size: 600%">Help Prompt</h1>
						<div class="row center">
							<h5 id="subtitulo"class="header col s12" style="text-shadow: 5px 5px  6px black;"><strong>Sempre atentos à você!</strong></h5>
						</div>
					</div>
				</div>
			</div>
		</div>
			<!-- Fim do Início -->

			<!-- Bloco sobre  -->
			<div class="container-fluid" id="sobre">
				<a name="sobre"></a>
				<div class="container">
					<div class="row">
						<div class="col s12 m12 l12">
							<h2 class="black-text">SOBRE</h2></div>
						</div>
					<div class="row">
						<div class="col s12 m4 l4 left">
							<div class="icon-block">
								<img src="Logo/logobrancasemfundo.png" class="responsive-img" style="text-align: left;">
							</div>
						</div>
						<div class="col s12 m8 l8">
							<h4 class="light flow-text black-text" style="line-height: 150%; text-align: justify;">Help Prompt é um aplicativo desenvolvido pela empresa Keys & Kases, que tem como desafio facilitar a vida de quem procura uma oficina mecânica mais próxima e um maior gosto financeiro. Help Prompt também tem a capacidade de calcular o tempo de trajeto para a chegada de um prestador de serviço até você.</h2>
							</div>
						</div>
					</div>
				</div>
					<!-- Fim do Bloco sobre -->
					<br>
					<br>
					<!-- Trabalhe conosco  -->
					<div  id="trabalheconosco">
						<a nome="trabalheconosco">
							@include('Formularios.trabalheconosco')
					</div>
					<!-- Fim do Trabalhe conosco -->
						
					<!-- Bloco Fale conosco -->
					<div class="container" id="faleconosco">
						<a nome="faleconosco">
							@include('Formularios.faleconosco')
					</div>
					<!-- Bloco Fale conosco -->
					<br>
					<br>
					</div>
				</div>
			</div>

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


				//Efeitos de animação
				$.scrollify({
			     section : "section",
			     sectionName : "section-name",
			     interstitialSection : "",
			     easing: "easeOutExpo",
			     scrollSpeed: 1100,
			     offset : 0,
			     scrollbars: true,
			     standardScrollElements: "",
			     setHeights: true,
			     overflowScroll: true,
			     updateHash: true,
			     touchScroll:true,
			     before:function() {},
			     after:function() {},
			     afterResize:function() {},
			     afterRender:function() {}
			   });

				</script>
			<script type="text/javascript" src="javascript.js"></script>
			<!-- Fim do JavaScript -->
<style>

h2{
	  font-family: 'Josefin Sans', serif;
		text-shadow: 2px 1px 2px black;"
}

#trabalheconosco{
	background-color: #e5e3e3;
	/* height: 460px; */
	/* padding: 10px 10px 0px 0px; */
}

#sobre{
		background-color:  #b3d0e2;
		padding: 10px 10px 10px 0px;
		height: 660px;
}

#inicio{
		background-color:  #ffffff;
		padding: 110px 10px 10px 0px;
		height: 560px;
}

.icon-block{
			background-color:  #FBFBFB;
}

#faleconosco{
	/* height: 460px; */
	/* padding: 110px 10px 10px 0px; */
}

#titulo{
	animation-duration: 2s;
	animation-name: slidein;
	color: black;
}

#subtitulo{
	animation-duration: 2s;
	animation-name: slidein;
	color: black;
}

@keyframes slidein {
	from{
		margin-left: -220%;
		width: 300%;
	}
	 to{
		margin-left: 0%;
		width: 100%;
	 }
}
</style>
<script>


				//Efeitos de animação
				var $animation_elements = $('.slidein');
				var $window = $(window);

				$window.on('scroll resize', check_if_in_view);

				function check_if_in_view() {
					  var window_height = $window.height();
					  var window_top_position = $window.scrollTop();
					  var window_bottom_position = (window_top_position + window_height);

					  $.each($animation_elements, function() {
					    var $element = $(this);
					    var element_height = $element.outerHeight();
					    var element_top_position = $element.offset().top;
					    var element_bottom_position = (element_top_position + element_height);

					    //check to see if this current container is within viewport
					    if ((element_bottom_position >= window_top_position) &&
					        (element_top_position <= window_bottom_position)) {
					      $element.addClass('in-view');
					    } else {
					      $element.removeClass('in-view');
					    }
					  });
}

</script>
		</body>
	</html>
@show
