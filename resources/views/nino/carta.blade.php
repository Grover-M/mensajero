@extends('layouts.appnino')
@section('content')
<div class="row" >

    @foreach(['danger','warning','success','info'] as $msg)
    @if(Session::has('alert-' . $msg))
    <div class="alert alert-success">
    <h2>{{Session::get('alert-' . $msg)}}</h2>
        
    </div>
    @endif
    @endforeach
<div class="col-sm-8 col-sm-offset-2">
    <div class=" fondo-carta well " style="margin-top: 2%;">
    
    
<div class="container form-group col-sm-12  ">
        <h2 align="center" style= "color: aqua;">Escribe una carta</h2>

</div>


    <form action="/cartas" role="form" name="enviar" file="true"  id="contactForm" data-toggle="validator" class="form-group  shake"  enctype ="multipart/form-data" method="POST">
        {{csrf_field()}}
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="name" class="h4" style= "color: aqua;">Titulo</label>
                <input type="text" name="titulo" class="form-control" id="name" placeholder="Ingrese Titulo" required data-error="NEW ERROR MESSAGE">
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-sm-6">
                <label for="name" class="h4" style= "color: aqua;">Asunto/Motivo</label>
                <input type="text" name="asunto" class="form-control" id="name" placeholder="Ingrese Asunto/Motivo de la carta" required data-error="NEW ERROR MESSAGE">
                <div class="help-block with-errors"></div>
            </div>
        </div>

       
        <div class="form-group">
            <label for="message" class="h4 " style= "color: aqua;">Carta</label>
            <textarea id="message" name="carta" class="form-control" rows="12" placeholder="Ecribe tu carta Aqui" required></textarea>
            <div class="help-block with-errors"></div>
        </div>
        <div class="col-md-12 " style="padding-right: 0px;padding-left: 0px;">
                                 <input type="file" id="pdf-file" value="Escoger una imagen"  name="imagen" class=" btn btn-primary"> 
        </div>

        <br>
    </br>
        <div class=" form-inline">
            <div class="form-group">
                             <input type="submit" name="enviar"  id="form-submit" value="Enviar" class="btn btn-warning btn-lg pull-left ">

            </div>
            <div class="form-group">
                         <a href="/" id="form-submit" class="btn btn-danger btn-lg pull-left ">Cancelar</a>

            </div>

 
        </div>

       
       
        <div id="msgSubmit" class="h3 text-center hidden"></div>
        <div class="clearfix"></div>
    </form>
    </div>
</div>
</div>

@endsection