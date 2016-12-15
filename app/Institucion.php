<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table = 'institucion';
    protected $fillable = ['rut_inst',
		'mision',
		'vision',
		'nombre',
		'direccion',
		'telefono',
		'mail'];

    public function aviso() {
    	return $this->hasMany('aviso');

    }
}
