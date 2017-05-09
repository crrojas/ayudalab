@extends('base')
@section('title')
    <title>SocialBook - {{ $institucion->nombre }} - {{$aviso->titulo}}</title>
        <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:site_name" content="Socialbook">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{$aviso->titulo}}" />
    <meta property="og:description" content="{{$aviso->descripcion}}" />
    <meta property="og:image" content="{{$aviso->imagenes->first()->ruta}}" />
    <meta property="og:image:width" content="838" />
    <meta property="og:image:height" content="638" />


@endsection

@section('content')
    <div class="col-md-9">

        <ol class="breadcrumb">
            <li><a href="/" >Inicio</a></li>
            <li><a href="/institucion/{{$aux}}" >{{ $institucion->nombre }}</a></li>
            <li><a href="/institucion/{{$aux}}/aviso/{{$aviso->id_aviso}}" class="active">{{$aviso->titulo}}</a></li>
        </ol>

        <!-- Blog Post -->

        <!-- Title -->
        <h1>{{$aviso->titulo}}</h1>

        <!-- Author -->
        <p class="lead">
            por <a href="/institucion/{{$aux}}">{{ $institucion->nombre }}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p><span class="glyphicon glyphicon-time"></span> Publicado el {{$aviso->created_at}}</p>

        <hr>

        <!-- Preview Image -->

        @if($aviso->imagenes->first())
            <img class="img-responsive" style="width: 900px;height: 330px;" src="{{$aviso->imagenes->first()->ruta}}" alt="{{$aviso->imagenes->first()->descripcion}}">
        @else
            <img class="img-responsive" src="http://placehold.it/900x300" alt="">
        @endif

        <hr>
        <!-- Redes Sociales -->
        <div>
            <!-- Your share button code -->
            <!--<div class="fb-share-button" data-layout="button" data-size="large" data-mobile-iframe="true" style="vertical-align: baseline"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u&amp;src=sdkpreparse">Compartir</a></div>
            -->
            <div class="fb-share-button"
                 data-layout="button"
                 data-size="large"
                 data-mobile-iframe="false">
                <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u&amp;src=sdkpreparse">
                    Compartir
                </a>
            </div>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.9";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>

            <div style="position: relative;
                 left: 102px;
                 top: -28px;"><a href="https://twitter.com/share" class="twitter-share-button" data-lang="es" data-size="large" data-dnt="true" >Twittear</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></div>

        </div>

       <hr>
        <!-- Post Content -->
        <p class="lead">{{$aviso->descripcion}}</p>

        <hr>
        <!-- Comment -->
        <div class="fb-comments" data-href="{{url()->current()}}" data-width="100%"></div>
    </div>
@endsection
