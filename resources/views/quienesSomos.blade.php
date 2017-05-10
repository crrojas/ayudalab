@extends('base')
@section('title')
<title>SocialBook - Quienes Somos</title>
@endsection

@section('content')
<div class="col-md-9">
    <ol class="breadcrumb">
        <li><a href="/" >Inicio</a></li>
        <li><a href="/quienes-somos" class="active" >Quienes Somos</a></li>
    </ol>

    <div class="thumbnail">
        <img class="img-responsive" src="{{asset('assets/images/logo2.png')}}" >
        <div class="caption-full">
            <h1 class="text-center">SocialBook<br>
            <small>Donde se reúnen las ganas de ayudar</small></h1>                
        </div>
    </div>

         <div class="thumbnail">
            <div class="caption-full">
            <h4 class="text-justify">Nuestro objetivo es comunicar eficazmente a instituciones sin fines de lucro y apolíticas que

existen en la ciudad de Valdivia con todos los ciudadanos que quieran apoyarlas en sus

distintas actividades de forma voluntaria, por medio de esta plataforma web llamada

Socialbook.</h4><br>

            </div>
        </div>

</div>
@endsection