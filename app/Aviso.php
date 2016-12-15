<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    protected $table = 'aviso';

    protected $fillable = ['descripcion', 'titulo', 'img', 'rut_inst'];

    public function institucion()
    {
    	return $this->belongsTo('Institucion');
    }
}
