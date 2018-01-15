@section('button')
<div class="fixed-action-btn col s12 m6 l6 subscribe-me" >
	<a class="btn-floating btn-large teal" class="scrolltop" onclick="topFunction()" id="myBtn" title="Go to top">
		<i class="large material-icons">arrow_upward</i>
	</a>
</div>

<script type="text/javascript" language="javascript">
				// Inicio da navbar
				$('.button-collapse').sideNav({
					menuWidth: 300, // Default is 240
					edge: 'left', // Choose the horizontal origin
					closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
				});
				// Final da navbar
				//botão para aparecer depois da imagem
				$(window).scroll(function() {
					// console.log($(this).scrollTop());
					if ($(this).scrollTop()>120)
					{
						$('#button').show();
					}
					else
					{
						$('#button').hide();
					}
				});
				//Fim do botão para aparecer depois da imagem
</script>

@show