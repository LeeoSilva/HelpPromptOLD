@section('rodape')

<style type="text/css" media="screen">
body {
display: flex;
min-height: 100vh;
flex-direction: column;
}
main {
flex: 1 0 auto;
}
.logo2{
height: 130px;
width: 250px;
}
.contatos{
  height: 40px;
  width: 40px;
}
.texto{
  color: #ffffff;
}
</style>
<footer class="page-footer container-fluid cor">
  <header>
    <main>
      <div class="container">
        <div class="row">
          <div class="col s12 m8 l8">
            <h5 class="white-text">HelpPrompt</h5>
            <p class="white-text text-lighten-4">Desenvolvido por Keys &#38; Kases.</p>
            <i class="material-icons prefix">room</i>Innova Space Coworking<br>R. Hygino Muzi Filho, 529 - Mirante<br>CEP:17525-902 - Marília - SP
          </div>
          <div class="col s12 m4 l4">
            <img src="Logo/invertidasemfundo.png" class="logo2">
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          <div class="row">
            <div class="col s12 m8 l8" style="padding: 60px 0px 0px 0px;">
            &#169; 2018 Keys &#38; Kases
            </div>
            <div class="col s12 m4 l4" style="text-align: right;">
              <a href="https://www.facebook.com/HelpPrompt-131174850922742/?ref=bookmarks" target="_blank"><img src="Contatos/facebook.png" class="contatos"></a>
              <a href="https://twitter.com/HelpPrompt" target="_blank"><img src="Contatos/twitter.png" class="contatos"></a>
              <a href="https://www.linkedin.com/feed/" target="_blank"><img src="Contatos/linkedin.png" class="contatos"></a>
            </div>
            <div></div>
          </div>
        </div>
      </div>
    </main>
    </header><!-- /header -->
  </footer>

@show
