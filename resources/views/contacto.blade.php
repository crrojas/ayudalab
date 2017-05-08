@extends('base')
@section('title')
    <title>SocialBook - Contacto</title>
@endsection

@section('content')
<div class="col-md-9">

    <ol class="breadcrumb">
        <li><a href="/" >Inicio</a></li>
        <li><a href="/contacto" class="active">Contacto</a></li>
    </ol>

    <div class="well well-sm">
        <form class="form-horizontal" method="post" id="enviarEmail">
            {{ csrf_field() }}
            <fieldset>
                <legend class="text-center header">Contáctate con nosotros</legend>
                <div class="form-group">
                    <div class="col-md-10 col-md-offset-1">
                        <input id="fname" name="nombre" type="text" placeholder="Nombre" class="form-control">
                        <span id="nombreHelpblock" class="help-block"></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10 col-md-offset-1">
                        <input id="lname" name="apellido" type="text" placeholder="Apellido" class="form-control">
                        <span id="apellidoHelpblock" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-10 col-md-offset-1">
                        <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                        <span id="emailHelpblock" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-10 col-md-offset-1">
                        <input id="phone" name="telefono" type="text" placeholder="Teléfono" class="form-control">
                        <span id="telefonoHelpblock" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-10 col-md-offset-1">
                        <textarea class="form-control" id="message" name="mensaje" placeholder="Ingresa tu duda, consulta, sugerencia, etc." rows="7"></textarea>
                        <span id="mensajeHelpblock" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12 text-center">
                        <input type="button" onclick="enviarFormulario('enviarEmail')" class="btn btn-primary" value=" Enviar"></input>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

<!-- POPUP MODAL -->
<!-- Modal -->
<div id="popupConfirmacion" class="modal fade" role="dialog" style="show:false;">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ATENCIÓN</h4>
        </div>
        <div class="modal-body" id="textoPopup">
        </div>
        <div class="modal-footer" id="confirmarPopup">
        </div>
    </div>

    </div>
</div>

<script type="text/javascript">

    /**
     * Recibe el 'id' de un formulario
     * Lo eńvía por AJAX a la ruta que corresponde
     * Si resulta bien, entrega la respuesta en un popup
     * Si tiene errores de validación, los muestra en los campos correspondientes
     * Si hay algún error desde el servidor, muestra la respuesta en un popup
     *
     * @param      {string}  operacion  La 'id' del formulario que se envía
     */
    function enviarFormulario(operacion){
        var url = window.location.pathname;
        $.ajax({
            url: url,
            type: "POST",
            dataType: 'json',
            data: $("#"+operacion).serialize(),
            success: function(response){
                $(".form-group").removeClass("has-error");
                $(".help-block").css("display","none");
                $("strong").remove();

                $('#popupConfirmacion').modal('show');
                $("#textoPopup").empty();
                $("#textoPopup").append("<p>"+response.msg+"</p>");
            },
            error: function(response){
                $(".form-group").removeClass("has-error");
                $(".help-block").css("display","none");
                $("strong").remove();
                var data = response.responseJSON;
                if (data['errors']) {
                    for (var i in data['errors']) {
                        $("#"+i+"Group").addClass("has-error");
                        $("#"+i+"Helpblock").append("<strong>"+data['errors'][i][0]+"</strong>")
                        $("#"+i+"Helpblock").css("display","inline");
                    }
                }
                else{
                    $('#popupConfirmacion').modal('show');
                    $("#textoPopup").empty();
                    $("#textoPopup").append("<p>"+data['msg']+"</p>");
                }
                
            },
        });     
    }
    </script>
<!-- FIN Enviar Formularios por AJAX -->
@endsection
