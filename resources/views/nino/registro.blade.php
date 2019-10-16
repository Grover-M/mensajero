@extends('layouts.auth')
@section('content')
<div class="container">
    <div class="jumbotron">
        <h2>Registrate</h2>
     <h3 class="display-4"></h3>
        <p>¿Cual es tu animal favorito?</p>
        <form method="POST" action="{{ url('/registro/nino') }}">
        {{csrf_field()}}
            <div class="form-group" >
            <select   class="custom-select " id="inputGroupSelect01" name="reg_animal" style="font-size: 20px"   >
                @forelse($animales as $animal)    
                    <option value="{{$animal->id}}">{{$animal->nombre}}</option>
                    
                @empty
                    <option value="">No hay datos</option>
                @endforelse
            </select>
            </div>
            <br>
        
            <button type="summit" class="btn btn-primary  btn-lg col-sm-3 col-sm-offset-4">Aceptar</button>
        </form>
        
        <!--<a class="btn btn-secondary btn-lg col-sm-3 col-sm-offset-0" href="/lognino" role="button">Volver</a>-->
        <br>
        <br>
        </div>
        
    </div>
    <style>
body { background-image: url("/adminlte/img/Fon2.jpg")  }
.jumbotron{  background-color: #F9DF73  ;}

</style>
</div>

@endsection