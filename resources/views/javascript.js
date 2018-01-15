
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
