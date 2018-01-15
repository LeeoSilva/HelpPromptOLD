
				
				
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

				
				
				//botão de subir não funciona
				//colocar efeito para descer
				//botao enviar