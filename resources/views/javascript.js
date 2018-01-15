<<<<<<< HEAD

			
				// Inicio da navbar
				$('.button-collapse').sideNav({
					menuWidth: 300, // Default is 240
					edge: 'left', // Choose the horizontal origin
					closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
				});
				// Final da navbar
=======
// Inicio do parallax
$(document).ready(function(){
	$('.parallax').parallax();

	this.getElementById("button").onclick(function (){
		$('html, body').animate({scrollTo(document.body, 0, 100);}, 1000);});
	});
	// Fim do Parallax


	// Inicio da navbar
	$('.button-collapse').sideNav({
		menuWidth: 300, // Default is 240
		edge: 'left', // Choose the horizontal origin
		closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
	});
	// Final da navbar



	//botão para aparecer depois da imagem
	$(window).scroll(function() {
		if ( $(this).scrollTop() >= 300 ){
			$('#button').show();
		}else{
			$('#button').hide();
		}
	});
	//Fim do botão para aparecer depois da imagem

$('#modal1').modal();
$('#modal2').modal();
$('#modal3').modal();
>>>>>>> 03f13b2469aa02a010117a666265dd17cee5f8e5
