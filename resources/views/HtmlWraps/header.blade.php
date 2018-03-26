@section('header')
<style type="text/css" media="screen">
    .logo{
    height: 100px;
    width: 180px;
    align: center;
    }
    .cor{
    background-color: #000000;
    color: #023a5d;
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
                <ul class="right hide-on-med-and-down" id="menu-mobile">
                    <li><a href="/">Home</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#trabalheconosco">Trabalhe conosco</a></li>
                    <li><a href="#faleconosco">Fale Conosco</a></li>
                </ul>
            </div>
        </div>

      </nav>

             <!-- Modal Structure  -->
            <div id="modal2" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <div class="modal-body">
                        @include('Formularios.Register')
                    </div>
                </div>
                    <div class="modal-footer">
                        <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
                        <a href="" class="modal-action modal-close waves-effect waves-green btn-flat ">Cadastrar</a>
                    </div>
                </div>

       <!-- Modal Structure  -->
                <div id="modal3" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        @include('Formularios.Register')
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
                        <a href="" class="modal-action modal-close waves-effect waves-green btn-flat ">Cadastrar</a>
                    </div>
                </div>
		</div>
@show
<style>
#botao{
  color: black;
}
</style>
