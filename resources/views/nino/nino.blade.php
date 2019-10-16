@extends('layouts.auth')
@section('content')
@foreach(['warning','success','info'] as $msg)
    @if(Session::has('alert-' . $msg))
    <div class="alert alert-success">
    <h2>{{Session::get('alert-' . $msg)}}</h2>
    </div>
    @endif
@endforeach
<div class="container">
    <div class="jumbotron">
     <h2 >¿Quieres escribir una carta?, Genial!!!</h2>
<form method="POST" action="{{ url('/lognino') }}">
{{csrf_field()}}
     <div class="form-group">
        @if(Session::has('alert-danger'))
        <div class="alert alert-danger" role="alert">
        {{Session::get('alert-danger')}}
        </div>
        @endif
        <p>¿Cual es tu Numero Animal?</p>
                <input type="text" class="form-control" name="nombre_animal" placeholder="Ingresa tu numero animal" style="font-size: 20px" required>
    </div>
       <!-- <p>¿Que numero animal eres?</p>
           <div class="container">
            <div class="container">
                <div class="col-sm-3 col-sm-offset-0">
                <div class="input-group-prepend">
                    
                </div>
                <select class="custom-select" id="inputGroupSelect01"  style="font-size: 20px" >
                    <option selected >Selecciona el animal</option>
                    <option value="1">Leon</option>
                    <option value="2">Tigre</option>
                    <option value="3">Oso</option>
                </select>
            </div>
            <div class="container">
                <div class="col-sm-3 col-sm-offset-0.5">
                <div class="input-group-prepend">
                    
                </div>
                <select class="custom-select" id="inputGroupSelect01" style="font-size: 20px" >
                    <option selected></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <a class="btn btn-success btn-lg" href="#" role="button">Escribir</a>
            background-image: url("adminlte/img/Fon.jpg")
            background-color: #3474F3;
        </div>-->
            <div class="form-group">
            <p>¿Cual es tu clave secreta?</p>
                <input type="password" class="form-control" name="pass" placeholder="Ingresa tu clave aqui" style="font-size: 20px" required>
            </div>
            
            <button type="submit" class="btn btn-primary btn-lg">Ingresar</button>
            </form>
            <br>
            <p class="lead">¿Es la primera vez que escribes una carta aqui?</p>
            <a class="btn btn-secondary btn-lg " href="/registro/nino" role="button">Si, es la primera vez</a>
        </div>
    </div>
</div>
<style>
body { background-image: url("/adminlte/img/Fon2.jpg") }

.jumbotron{  background-color: #F9DF73  ;}

</style>

@endsection