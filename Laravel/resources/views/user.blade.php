@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Registro de usuario</div>

                    @if($errors->has())
                        <div class='alert alert-danger'>
                                Se encontraron errores en la información que ingresaste.
                        </div>
                    @endif

                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif

                    <div class="panel-body">
                        {!! Form::open(['route' => 'user.store']) !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {!! Form::text('name', null, ["class" => "form-control", 'placeholder' => 'Nombre']) !!}
                            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group{{ $errors->has('paternal_name') ? ' has-error' : '' }}">
                            {!! Form::text('paternal_name', null, ["class" => "form-control", 'placeholder' => 'Apellido Paterno']) !!}
                            {!! $errors->first('paternal_name', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group{{ $errors->has('maternal_name') ? ' has-error' : '' }}">
                        {!! Form::text('maternal_name', null, ["class" => "form-control", 'placeholder' => 'Apellido Materno']) !!}
                            {!! $errors->first('maternal_name', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {!! Form::email('email', null, ["class" => "form-control", 'placeholder' => 'E-mail']) !!}
                            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            {!! Form::select('gender', array('' => 'Seleccione su sexo', 'male' => 'Masculino', 'female' => 'Femenino'), null, ["class" => "form-control"],'') !!}
                            {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {!! Form::password('password', ["class" => "form-control",'placeholder' => 'Contraseña']) !!}
                            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            {!! Form::password('password_confirmation', ["class" => "form-control", 'placeholder' => 'Confirmar Contraseña']) !!}
                            {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Registrarme', ["class" => "btn btn-success btn-block"]) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection