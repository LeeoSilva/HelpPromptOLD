@section('error404')

@include('HtmlWraps.comeco')

@include('HtmlWraps.headerWork')

<div id="index-banner" class="parallax-container">
	<div class="section no-pad-bot">
		<div class="container">
			<br><br>
				<h1 id="titulo" class="header col s12 center" style="padding: 10% 0% 0% 0%;text-shadow: 5px 5px 5px black;font-size: 600%;color:white;">PÁGINA NÃO ENCONTRADA :(</h1>
		</div>
	</div>
    <div class="parallax"><img src="error404.jpg"></div>
</div>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript" language="javascript" >
 	$('.parallax').parallax();
</script>
		</body>
	</html>
@show

