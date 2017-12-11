	//Inicio do parallax
	$(document).ready(function(){
		$('.parallax').parallax();
		
	});
	// Fim do Parallax

	// Inicio da navbar
	$('.button-collapse').sideNav({
	menuWidth: 300, // Default is 240
	edge: 'left', // Choose the horizontal origin
	closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
	});
	// Final da navbar
	
	// Começo da função do botão para subir
	$('.scrollup').click(function () {
	$("html, body").animate({
	scrollTop: 0
	}, 600);
	return false;
	});
	// Final da função do botão para subir
	
	//botão para aparecer depois da imagem
	$(window).scroll(function() {
	console.log($(this).scrollTop());
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