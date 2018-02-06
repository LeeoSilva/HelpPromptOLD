<body>
<div class="section black-text">
						<div class="container">
							<div class="row"><h3 style="text-shadow: 3px 3px  4px black;">QUER TRABALHAR CONOSCO?</h3></div><br><br>
							<div class="divider"></div>
</div>
							<div <div class="row">
								<center><div class="col s12 l3 m3" class="cor1"><h1> oi</h1></div></center>

								<center><div class="col s12 l3 m3" class="cor2"><h1> oi</h1></div></center>

								<center><div class="col s12 l3 m3" class="cor3"><h1> oi</h1></div></center>

								<center><div class="col s12 l3 m3" class="cor4"><h1> oi</h1></div></center>
							</div>
							</div>
							{{-- Verificação e apresentação de erros --}}
						  @if( $errors->any() )
						    <ul class='alert alert-danger'>
						      @foreach( $errors->all() as $error )
						        <li>{{ $error }} </li>
						      @endforeach
						    </ul>
						  @endif

</div>
</body>

<style>
	h2{
		  font-family: 'Josefin Sans', serif;
			text-shadow: 2px 1px 2px black;"
	}

	body{
			background-color:  pink;
	}

	#cor1{
		background-color: gray;
	}

	.cor2{
			background-color: pink;

		}

	.cor3{
			background-color: blue;
			}

	.cor4{
					background-color: black;
				}
</style>
