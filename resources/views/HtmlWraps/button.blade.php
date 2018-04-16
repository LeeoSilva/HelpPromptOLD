@section('button')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $(window).scroll(function(){
                if($(this).scrollTop() > 100){
                    $('#scroll').fadeIn();
                }else{
                    $('#scroll').fadeOut();
                }
            });
            $('#scroll').click(function(){
                $("html, body").animate({ scrollTop: 0 }, 600);
                return false;
            });
        });
    </script>

    <div class="fixed-action-btn horizontal">
        <a class="btn-floating btn-large waves-effect waves-light right blue" id="scroll"><i class="material-icons">arrow_upward</i></a>
    </div>
@show