<<<<<<< HEAD
@section('principal')

@include('HtmlWraps.comeco')


		<!-- Cabeçalho -->
		<div>
			@include('HtmlWraps.header')
		</div>
		<!-- Fim do Cabeçalho -->

		<!--Início -->
		<div id="index-banner" class="parallax-container">
			<div class="section no-pad-bot">
				<div class="container">
					<br><br>
						<h1 id="titulo" class="header col s12 center" style="padding: 10% 0% 0% 0%;text-shadow: 5px 5px 5px black;font-size: 600%;color:white;">Help Prompt</h1>
					<div class="row center">
						<h5 id="subtitulo"class="header col s12" style="text-shadow: 5px 5px  6px black;color:white;"><strong>Sempre atentos à você!</strong></h5>
					</div>
					<br><br>
				</div>
			</div>
			<div class="parallax"><img src="fundo.jpg"></div>
 		</div>
		<!-- Fim do Início -->

		<!-- Bloco sobre  -->
		<div class="container-fluid" id="sobre">
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12">
						<h2 class="black-text" style="padding: 10% 0% 0% 0%;">SOBRE</h2></div>
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
					
					<!-- Bloco Baixe o App -->
						 <!-- @include('HtmlWraps.baixeoapp') -->
					<!-- Fim do Bloco Baixe o App -->

					<!-- Trabalhe conosco  -->
						<div  id="trabalheconosco">
							@include('Formularios.trabalheconosco')
						</div>
					<!-- Fim do Trabalhe conosco -->

					<!-- Bloco Informações  -->
						<div class="container" id="informacoes">
							@include('HtmlWraps.informacoes')
						</div>
					<!-- Fim do Bloco Informações  -->

					<!-- Bloco Fale conosco -->
						<div class="container" id="faleconosco">
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
				$('.parallax').parallax();
				
				// Inicio da navbar
				$('.button-collapse').sideNav({
					menuWidth: 300, // Default is 300
					edge: 'left', // Choose the horizontal origin
					closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
					draggable: true, // Choose whether you can drag to open on touch screens,
				});
				// Final da navbar

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
			<!-- Fim do JavaScript -->
<style>

h2{
	  font-family: 'Josefin Sans', serif;
		text-shadow: 2px 1px 2px black;"
}

#sobre{
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
		</body>
	</html>
@show
=======
@section('principal')

@include('HtmlWraps.comeco')


		<!-- Cabeçalho -->
		<div>
			@include('HtmlWraps.header')
		</div>
		<!-- Fim do Cabeçalho -->

		<!--Início -->
		<div id="index-banner" class="parallax-container">
			<div class="section no-pad-bot">
				<div class="container">
					<br><br>
						<h1 id="titulo" class="header col s12 center" style="padding: 10% 0% 0% 0%;text-shadow: 5px 5px 5px black;font-size: 600%;color:white;">Help Prompt</h1>
					<div class="row center">
						<h5 id="subtitulo"class="header col s12" style="text-shadow: 5px 5px  6px black;color:white;"><strong>Sempre atentos à você!</strong></h5>
					</div>
					<br><br>
				</div>
			</div>
			<div class="parallax"><img src="fundo.jpg"></div>
 		</div>
		<!-- Fim do Início -->

		<!-- Bloco sobre  -->
		<div class="container-fluid" id="sobre">
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12">
						<h2 class="black-text" style="padding: 10% 0% 0% 0%;">SOBRE</h2></div>
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
					
					<!-- Bloco Baixe o App -->
						 <!-- @include('HtmlWraps.baixeoapp') -->
					<!-- Fim do Bloco Baixe o App -->

					<!-- Trabalhe conosco  -->
						<div  id="trabalheconosco">
							@include('Formularios.trabalheconosco')
						</div>
					<!-- Fim do Trabalhe conosco -->

					<!-- Bloco Informações  -->
						<div class="container" id="informacoes">
							@include('HtmlWraps.informacoes')
						</div>
					<!-- Fim do Bloco Informações  -->

					<!-- Bloco Fale conosco -->
						<div class="container" id="faleconosco">
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
				$('.parallax').parallax();
				
				// Inicio da navbar
				$('.button-collapse').sideNav({
					menuWidth: 300, // Default is 300
					edge: 'left', // Choose the horizontal origin
					closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
					draggable: true, // Choose whether you can drag to open on touch screens,
				});
				// Final da navbar

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
			<!-- Fim do JavaScript -->
<style>

h2{
	  font-family: 'Josefin Sans', serif;
		text-shadow: 2px 1px 2px black;"
}

#sobre{
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
		</body>
	</html>
@show
>>>>>>> refs/remotes/origin/master
