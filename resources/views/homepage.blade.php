@extends('base')
@section('title')
<title>SocialBook - Donde se reunen las ganas de ayudar</title>
@endsection

@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="/" class="active">Inicio</a></li>
</ol>
@endsection

@section('content')

<?php 
    $cont = 0;
 ?>

<div class="col-md-9">

    <div class="row carousel-holder">

        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
            @foreach ($instituciones as $key => $institucion)
                @if($cont == 0)
                    <li data-target="#carousel-example-generic" data-slide-to="{{$cont}}" class="active"></li>
                    <?php 
                        $cont= $cont+1;
                     ?>
                @else
                    <li data-target="#carousel-example-generic" data-slide-to="{{$cont}}"></li>
                    <?php 
                        $cont= $cont+1;
                     ?>
                @endif
            @endforeach
                </ol>
                <?php 
                $cont=0;
                 ?>
                <div class="carousel-inner">

                    @foreach ($instituciones as $key => $institucion)
                        @if($cont==0)
                            <div class="item active">
                                <img class="slide-image" src="{{$institucion->imagen->ruta}}" alt="">
                            </div>

                            <?php  
                            $cont= $cont+1;
                            ?>
                        @else
                            <div class="item">
                                <img class="slide-image" src="{{$institucion->imagen->ruta}}" alt="">
                            </div>
                            <?php  
                            $cont= $cont+1;
                            ?>
                        @endif
                    @endforeach
                </div>

                    
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>

    </div>

    <div class="row">
        @foreach ($avisos as $key => $aviso)

        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="http://placehold.it/320x150" alt="">
                <div class="caption">
                    <h4><a href="institucion/{{$aviso->nom_institucion}}/aviso/{{$aviso->id}}">{{ $aviso->titulo }}</a>
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