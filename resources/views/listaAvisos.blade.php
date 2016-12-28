@extends('dashboard')
@section('lugar') <i class="fa fa-fw fa-calendar"></i> Avisos -> Lista de Avisos @endsection
@section('content')


<div class="panel panel-default">
    <div class="panel-heading">Lista de Avisos</div>
    <div class="panel-body">
        @foreach ($avisos as $key => $aviso)
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="http://placehold.it/320x150" alt="">
                <div class="caption">
                    <h4><a href="/institucion/{{$aviso->nom_institucion}}/aviso/{{$aviso->id}}">{{ $aviso->titulo }}</a>
                    </h4>
                    <p>{{ $aviso->descripcion }}</p>
                </div>
                <div class="ratings">
                    <p class="pull-right">15 reviews</p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </p>
                </div>
            </div>
        </div>      
        @endforeach
        {{ $avisos->links() }}
    </div>
</div>

@endsection