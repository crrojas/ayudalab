@extends('base')
@section('title')
    <title>SocialBook - {{ $institucion->nombre }} - {{$aviso->titulo}}</title>
        <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="{{url()->current()}}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    @if($aviso->imagenes->first())
    <meta property="og:image"         content="{{$aviso->imagenes->first()->ruta}}" />
    @endif
    

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
            <!-- Load Facebook SDK for JavaScript -->
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.9";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

            <!-- Your share button code -->
            <div class="fb-share-button" 
                data-href="{{url()->current()}}" 
                data-layout="button_count">
            </div>

            <div class="fb-share-button" data-href="http://localhost:8000/institucion/Comedor_San_Antonio/aviso/1" data-layout="button" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8000%2Finstitucion%2FComedor_San_Antonio%2Faviso%2F1&amp;src=sdkpreparse">Compartir</a></div>

            <a href="https://twitter.com/share" class="twitter-share-button" data-via="cesar_ed22" data-dnt="true">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        
        </div>

       <hr>
        <!-- Post Content -->
        <p class="lead">{{$aviso->descripcion}}</p>

        <hr>
        <!-- Comment -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="fb-comments" data-href="http://ayudalab.dev"></div>
    </div>
@endsection
