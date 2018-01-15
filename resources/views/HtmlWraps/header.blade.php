@section('header')
<style type="text/css" media="screen">
    .logo{
    height: 100px;
    width: 180px;
    padding: 0 0 25px 0;
    }
    .contatos{
    height: 40px;
    width: 40px;
    text-align: right;
        }
    .cor{
    background-color: #000000;
    }
    .parceiros{
      height: 150px;
      width: 275px;
    }
    .parallax{
        background-image: url('fundo.jpg');
        width: auto;
        height: auto;
        position: sticky;
    }
    .modalmobile{
        height: 10%;
        width: 10%;
    }
    #modal3{
        overflow: hidden;
        width: 35%;
        height: 50%;
    }
    </style>

<div class="navbar">
      <nav class="cor">
        <div class="nav-wrapper" >
          <a href="index.php" class="brand-logo"><img src="Logo/invertidasemfundo.png" class="logo"/></a>
          <a href="" data-activates="menu-mobile" class="button-collapse">
            <i class="material-icons">menu</i>
          </a>
          <!-- mobile -->
            <ul class="side-nav" id="menu-mobile">
                <li><a href="">Home</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="trabalheconosco.blade.php">Trabalhe conosco</a></li>
                <li><a href="#parceiros">Parceiros</a></li>
                <a class="waves-effect waves-light btn modal-trigger" href="#modal2" class="modalmobile">Login</a>
                <!-- Modal Structure -->
                <div id="modal2" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4><font color="black">Login</font></h4>
                        @include('Formularios.Login')
                    </div>
                </div>
                    <div class="modal-footer">
                        <a href="" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
                        <a href="" class="modal-action modal-close waves-effect waves-green btn-flat ">Logar</a>
                    </div>
                </div>
                </ul>

            <!--Web-->
            <ul class="right hide-on-med-and-down" id="menu-mobile">
                <li><a href="index.php">Home</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#trabalheconosco">Trabalhe conosco</a></li>
                <li><a href="#parceiros">Parceiros</a></li>
                <li><a href="trabalheconosco.blade.php">Trabalhe conosco</a></li>
                <li><a class="waves-effect waves-light btn modal-trigger" href="#modal3">Login</a></li>
                <!-- Modal Structure -->
        </div>
      </nav>
      <div id="modal3" class="modal modal-fixed-footer">
        <div class="modal-content">
          <div class="modal-body">
            <h4><font color="black">Login</font></h4>
            @include('Formularios.Login')
          </div>
        </div>
        <div class="modal-footer">
          <a href="" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
          <a href="" class="modal-action modal-close waves-effect waves-green btn-flat ">Logar</a>
        </div>
      </div>
		</div>
@show
</ul>
