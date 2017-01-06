@extends('dashboard')
@section('lugar') <i class="fa fa-fw fa-calendar"></i> Avisos -> Lista de Avisos @endsection
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">Lista de Avisos</div>
    <div class="panel-body">
        <div class="row">
        {{ csrf_field() }}
        @foreach ($avisos as $key => $aviso)
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="http://placehold.it/320x150" alt="">
                <div class="caption">
                    <h4><a href="/institucion/{{$aviso->nom_institucion}}/aviso/{{$aviso->id}}">{{ $aviso->titulo }}</a>
                    </h4>
                    <p>{{ $aviso->descripcion }}</p>
                </div>
                <a type="button" href="/dashboard/institucion/{{$aviso->nom_institucion}}/aviso/{{$aviso->id}}" class="btn btn-primary btn-block">Editar</a>
                <button type="button" onclick="confirmar('{{$aviso->id}}','{{$aviso->nom_institucion}}')" class="btn btn-danger btn-block">Eliminar</button>
            </div>
        </div>      
        @endforeach
        {{ $avisos->links() }}
        </div>
    </div>
</div>


<script type="text/javascript">

    function confirmar(id,nom_institucion){
        var input = "'"+id.toString()+","+nom_institucion.toString()+"'";
        $('#popupConfirmacion').modal('show');
        $("#textoPopup").empty();
        $("#textoPopup").append("<p>¿Está seguro que desea eliminar el Aviso?</p>");
        $("#confirmarPopup").empty();
        $("#confirmarPopup").append('<button type="button" class="btn btn-danger" onclick="eliminarAviso('+input+')">Eliminar</button>');
        $("#confirmarPopup").append('<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>');

    }

    function eliminarAviso(id,nom_institucion){
        var nom = nom_institucion;
        data = {"id" : id, "nom_institucion" : nom};
        var url = window.location.pathname;
        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('input[name="_token"]').attr('value') },
            url: url+"/eliminarAviso",
            type: "POST",
            dataType: "json",
            data: data,
            success: function(response){
                $("#textoPopup").empty();
                $("#confirmarPopup").empty();
                $("#textoPopup").append("<p>"+response.msg+"</p>");
                setTimeout(function(){
                    location.reload();
                }, 750);
            },
            error: function(response, errorThrown){
                $("#textoPopup").empty();
                $("#textoPopup").append("<p>"+response.msg+"</p>");
            }
        });

        
    }
</script>

@endsection