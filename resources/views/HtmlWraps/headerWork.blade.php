@section('header')
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
                </ul>

                <!--Web-->
                <ul class="right hide-on-med-and-down" id="menu-mobile">
                    <li><a href="/">Home</a></li>
                </ul>
            </div>
        </div>
      </nav>
</div>
@show

