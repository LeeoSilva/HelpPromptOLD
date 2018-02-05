@section('work')
<html>
    <head>
                <meta charset="utf-8">
                <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>Trabalhe Conosco</title>
                <link rel="stylesheet" href="css/materialize.css">
                <link rel=icon href=./Logo/logobrancasemfundo.png>
    </head>

<body>
    <style type="text/css" media="screen">
        .logo{
        height: 100px;
        width: 180px;
        padding: 0 0 25px 0;
        }
        .cor{
        background-color: #000000;
        }
        .modalmobile{
            height: 10%;
            width: 10%;
        }
        #modal5{
            overflow: hidden;
            width: 35%;
            height: 50%;
        }
    </style>

<!-- Cabeçalho -->
    <div class="navbar" role="navigation">
        <nav class="cor">
            <div class="nav-wrapper" class="navbar-header">
            <a href="#" class="brand-logo"><img src="Logo/invertidasemfundo.png" class="logo"/></a>
            <a href="" data-activates="menu-mobile" class="button-collapse">
                <i class="material-icons">menu</i>
            </a>
            <!-- mobile -->
                <ul class="side-nav" id="menu-mobile" >
                    <li><a href="/">Home</a></li>
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal4">Login</a>
                    </ul>

                <!--Web-->
                <ul class="right hide-on-med-and-down" id="menu-mobile">
                    <li><a href="/">Home</a></li>
                    <li><a class="waves-effect waves-light btn modal-trigger" href="#modal5">Login</a></li>
                    
                </ul>
            </div>
        </nav>

        <!-- Modal Structure mobile -->
                <div id="modal4" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h4><font color="black">Login</font></h4>
                            @include('Formularios.Login')
                        </div>
                    </div>
                        <div class="modal-footer">
                            <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
                            <a href="logado.blade.php" class="modal-action modal-close waves-effect waves-green btn-flat ">Logar</a>
                        </div>
                    </div>

        <!-- Modal Structure web -->
                    <div id="modal5" class="modal modal-fixed-footer">
                        <div class="modal-content">
                                <h4><font color="black">Login</font></h4>
                                @include('Formularios.Login')
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
                            <a href="logado.blade.php" class="modal-action modal-close waves-effect waves-green btn-flat ">Logar</a>
                        </div>
                    </div>
            </div>
<!-- Fim do Cabeçalho -->

<!-- Formulário -->
    @include('Formularios.workcomplementar')
<!-- Fim do Formulário -->

            <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
			<script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" language="javascript">
                $('#modal4').modal();
                $('#modal5').modal();
        </script>
    </body>
</html>
@show