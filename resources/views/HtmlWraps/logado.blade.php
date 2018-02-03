@section('logado')

<div class="navbar" role="navigation">
      <nav class="cor">
        <div class="nav-wrapper" class="navbar-header">
          <a href="#" class="brand-logo"><img src="Logo/invertidasemfundo.png" class="logo"/></a>
          <a href="" data-activates="menu-mobile" class="button-collapse">
            <i class="material-icons">menu</i>
          </a>
          <!-- mobile -->
            <ul class="side-nav" id="menu-mobile" >
                <li><a href="">Home</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#trabalheconosco">Trabalhe conosco</a></li>
                <li><a href="#parceiros">Parceiros</a></li>
                <li><a href="#faleconosco">Fale Conosco</a></li>
                <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Login</a>
                </ul>

            <!--Web-->
            <ul class="right hide-on-med-and-down" id="menu-mobile">
                <li><a href="#">Home</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#trabalheconosco">Trabalhe conosco</a></li>    
                <li><a href="#parceiros">Parceiros</a></li> 
                <li><a href="#faleconosco">Fale Conosco</a></li>
                <li><a class="waves-effect waves-light btn modal-trigger" href="#modal3">Login</a></li>
                
            </ul>
        </div>
      </nav>

            <!-- Modal Structure -->
            <div id="modal2" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4><font color="black">Login</font></h4>
                        @include('Formularios.Login')
                    </div>
                </div>
                    <div class="modal-footer">
                        <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
                        <a href="" class="modal-action modal-close waves-effect waves-green btn-flat ">Logar</a>
                    </div>
                </div>

      <!-- Modal Structure -->
                <div id="modal3" class="modal modal-fixed-footer">
                    <div class="modal-content">
                            <h4><font color="black">Login</font></h4>
                            @include('Formularios.Login')
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
                        <a href="" class="modal-action modal-close waves-effect waves-green btn-flat ">Logar</a>
                    </div>
                </div>
		</div>

@show