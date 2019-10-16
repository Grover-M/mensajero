@extends('layouts.app')

@section('content')
    <div class="container" >

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default color-especialista" >
            <h3 class="page-title">@lang('global.users.title')</h3>

                <div class="panel-heading"">Registrar Datos</div>
                <div class="panel-body">

    {!! Form::open(['method' => 'POST', 'route' => ['admin.users.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Nombre*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
<!--Se aumento Aqui el apellido-->
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('apellido', 'Apellido*', ['class' => 'control-label']) !!}
                    {!! Form::text('apellido', old('apellido'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('apellido'))
                        <p class="help-block">
                            {{ $errors->first('apellido') }}
                        </p>
                    @endif
                </div>
            </div>
<!--fin de  apellido-->

<!--Se aumento Aqui el direccion-->
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('direccion', 'Direccion*', ['class' => 'control-label']) !!}
                    {!! Form::text('direccion', old('direccion'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('direccion'))
                        <p class="help-block">
                            {{ $errors->first('direccion') }}
                        </p>
                    @endif
                </div>
            </div>
<!--fin de  direccion-->

<!--Se aumento Aqui el telefono-->
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('telefono', 'Telefono*', ['class' => 'control-label']) !!}
                    {!! Form::text('telefono', old('telefono'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('telefono'))
                        <p class="help-block">
                            {{ $errors->first('telefono') }}
                        </p>
                    @endif
                </div>
            </div>
<!--fin de  telefono-->
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', 'Correo*', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            <!--Se aumento Aqui el especialidad-->
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('especialidad', 'Especialidad*', ['class' => 'control-label']) !!}
                    {!! Form::text('especialidad', old('especialidad'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('especialidad'))
                        <p class="help-block">
                            {{ $errors->first('especialidad') }}
                        </p>
                    @endif
                </div>
            </div>
<!--fin de  direccion-->
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('password', 'Contraseña*', ['class' => 'control-label']) !!}
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('password'))
                        <p class="help-block">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('roles', 'Roles*', ['class' => 'control-label']) !!}

<select type="text" name="roles[]" class="custom-select">
     <option value="editor" selected >Editor</option>
                        <option value="especialista" selected >Especialista</option>
                         </select>

                    <p class="help-block"></p>
                    @if($errors->has('roles'))
                        <p class="help-block">
                            {{ $errors->first('roles') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>
</div>
@stop

