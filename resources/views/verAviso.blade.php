@extends('base')
@section('title')
    <title>SocialBook - {{ $institucion->nombre }} - {{$aviso->titulo}}</title>
@endsection

@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="/" >Inicio</a></li>
    <li><a href="/" class="active">{{ $institucion->nombre }}</a></li>
</ol>
@endsection

@section('content')
    <div class="col-md-9">
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
        <img class="img-responsive" src="http://placehold.it/900x300" alt="">

        <hr>
        <!-- Redes Sociales -->
        <div>
            <!-- Load Facebook SDK for JavaScript -->
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
            <div class="fb-share-button" data-href="institucion/{{$institucion->nombre}}/aviso/{{$aviso->id}}" data-layout="button" data-mobile-iframe="true">
                <a class="fb-xfbml-parse-ignore" target="_blank" >Compartir</a>

            </div>
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
