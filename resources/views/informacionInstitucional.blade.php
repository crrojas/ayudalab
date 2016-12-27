@extends('dashboard')
@section('lugar') <i class="fa fa-fw fa-dashboard"></i> Información Institucional @endsection
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">Información Institucional</div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" id="editarInformacionInstitucional">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                <label for="nombre" class="col-md-4 control-label">Nombre</label>

                <div class="col-md-6">
                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">

                    @if ($errors->has('nombre'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                <label for="direccion" class="col-md-4 control-label">Dirección</label>

                <div class="col-md-6">
                    <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}">

                    @if ($errors->has('direccion'))
                        <span class="help-block">
                            <strong>{{ $errors->first('direccion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('mision') ? ' has-error' : '' }}">
                <label for="mision" class="col-md-4 control-label">Misión</label>

                <div class="col-md-6">
                    <input id="mision" type="text" class="form-control" name="mision" value="{{ old('mision') }}">

                    @if ($errors->has('mision'))
                        <span class="help-block">
                            <strong>{{ $errors->first('mision') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('vision') ? ' has-error' : '' }}">
                <label for="vision" class="col-md-4 control-label">Visión</label>

                <div class="col-md-6">
                    <input id="vision" type="text" class="form-control" name="vision" value="{{ old('vision') }}">

                    @if ($errors->has('vision'))
                        <span class="help-block">
                            <strong>{{ $errors->first('vision') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                <label for="telefono" class="col-md-4 control-label">Teléfono</label>

                <div class="col-md-6">
                    <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}">

                    @if ($errors->has('telefono'))
                        <span class="help-block">
                            <strong>{{ $errors->first('telefono') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('mail') ? ' has-error' : '' }}">
                <label for="mail" class="col-md-4 control-label">E-Mail</label>

                <div class="col-md-6">
                    <input id="mail" type="email" class="form-control" name="mail" value="{{ old('mail') }}">

                    @if ($errors->has('mail'))
                        <span class="help-block">
                            <strong>{{ $errors->first('mail') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <input type="button" onclick="editarInformacionInstitucional()" class="btn btn-primary">
                        <i class="fa fa-btn fa-save"></i> Guardar
                    </input>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
function editarInformacionInstitucional(){
	$.ajax({
		url: "{{ url('/dashboard/informacionInstitucional') }}",
		type: "POST",
		dataType: 'json',
		data: $("#editarInformacionInstitucional").serialize(),
		success: function(response){
			console.log(response);
		},
		error: function(response){
	        var data = response.responseJSON;
	        for (var i in data['errors']) {
	        	console.log(i+" : "+data['errors'][i][0]);
	        }
      	},
	});		
}
</script>

@endsection