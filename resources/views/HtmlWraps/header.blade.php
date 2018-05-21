@section('header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<style type="text/css" media="screen">
    .logo{
    height: 100px;
    width: 180px;
    align: center;
    }
    .cor{
    background-color: #000000;
    color: #ffffff;
    }
    @media screen and (max-width: 600px){
        .logo{
            max-width:100px;
            max-height:60px;
        }
    }
</style>


<div class="navbar-fixed" role="navigation">
      <nav class="cor">
        <div class="container">
            <div class="nav-wrapper" class="navbar-header">
            <a class="brand-logo"><img src="Logo/invertidasemfundo.png" class="logo"/></a>
            <a href="" data-activates="menu-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

            <!-- mobile -->
                <ul class="side-nav" id="menu-mobile" >
                    <li><a href="/">Home</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#trabalheconosco">Trabalhe conosco</a></li>
                    <li><a href="#faleconosco">Fale Conosco</a></li>
                </ul>

            <!--Web-->
                <ul class="right hide-on-med-and-down">
                    <li><a href="/" >Home</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#trabalheconosco">Trabalhe conosco</a></li>
                    <li><a href="#faleconosco">Fale Conosco</a></li>
                </ul>
            </div>
        </div>

      </nav>
		<script>
			var $doc = $('html, body');
			$('a').click(function() {
				$doc.animate({
					scrollTop: $( $.attr(this, 'href') ).offset().top
				}, 500);
				return false;
			});
            //  $(document).ready(function () { 
            //      $(".navbar-nav li a").click(function(event) { 
            //          $(".navbar-collapse").collapse('hide'); }); });
		</script>
</div>
@show
