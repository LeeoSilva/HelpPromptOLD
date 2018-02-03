@section('complementar')

<div class="container">
    <div class="row">
    <form class="col s6 m6 l6" >
    {!! Form::open(['url' => 'WorkCompleto', 'method' => 'post', 'autocomplete' => 'off']); !!}
                        <div class="row">
                            <div class="col s12 l6 m6 padding-right">
                                <h3>Dados da Empresa</h3>
                            </div>
                        </div>
                <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::text('empresa_nome') !!} <br>
                        {!! Form::label('name', 'Nome: ') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::email('usermail') !!} <br>
                        {!! Form::label('email', 'Email: ') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::text('userfone') !!} <br>
                        {!! Form::label('fone', 'Telefone: ') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::text('userlocation') !!}
                        {!!Form::label('Endereço:')!!}
                    </div>
                </div>
        </form>  
        {!! Form::close() !!}
        <form class="col s6 m6 l6">
                        <div class="row">
                            <div class="col s12 l6 m6">
                                <h3>Dados do Representante</h3>
                            </div>
                        </div>
       
                <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::text('username') !!} <br>
                        {!! Form::label('name', 'Nome: ') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::email('usermail') !!} <br>
                        {!! Form::label('email', 'Email: ') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::text('userfone') !!} <br>
                        {!! Form::label('fone', 'Telefone: ') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6 m6">
                        {!! Form::text('userlocation') !!}
                        {!!Form::label('Endereço:')!!}
                    </div>
                </div>

        </form>
      
    </div>
                <div class="row">
                    <div class="col s12 l12 m12">
                        {!! Form :: submit ('enviar', array ('class' => 'btn waves-effect waves-light right')) !!}
                    </div>
                </div>
</div>
	{!! Form::close() !!}