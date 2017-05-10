@extends('base')
@section('title')
<title>SocialBook - {{ $institucion->nombre }}</title>
@endsection

@section('content')
<div class="col-md-9">
    <ol class="breadcrumb">
        <li><a href="/" >Inicio</a></li>
        <li><a href="/institucion/{{ $institucion->nom_institucion }}" class="active" >{{ $institucion->nombre }}</a></li>
    </ol>
    <div class="thumbnail">
        <img class="img-responsive" src="{{$imagen->ruta}}" alt="{{$imagen->descripcion}}" style="max-width:50%">
        <div class="caption-full">
            <h3>Misión</h3>
            <p>{{ $institucion->mision }}</p>

            <h3>Visión</h3>
            <p>{{$institucion->vision }}</p>

            <h3>Contacto</h3>
            <p>Teléfono: +569 {{$institucion->telefono}}</p>
            <p>Dirección: {{$institucion->direccion}}</p>
            <p>Email: {{$institucion->mail}}</p>                         
        </div>
    </div>

         <div class="row">
            <h1 class="text-center">Avisos</h1><br>
            @foreach ($avisos as $key => $aviso)
            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    @if($aviso->imagenes->first())
                        <img src="{{$aviso->imagenes->first()->ruta}}" style="width: 320px;height: 150px;" alt="">
                    @else
                        <img src="http://placehold.it/320x150" style="width: 320px;height: 150px;" alt="" >
                    @endif
                    <div class="caption">
                        <h4><a href="/institucion/{{$aviso->nom_institucion}}/aviso/{{$aviso->id_aviso}}">{{ $aviso->titulo }}</a>
                        </h4>
                        <p>{{ $aviso->descripcion }}</p>
                    </div>
                    <!-- <div class="ratings">
                        <p class="pull-right">15 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                        </p>
                    </div> -->
                </div>
            </div>      
            @endforeach
            {{ $avisos->links() }}

        </div>

</div>
@endsection