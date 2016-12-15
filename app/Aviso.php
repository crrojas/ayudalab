<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    protected $table = 'aviso';

    protected $fillable = ['descripcion', 'titulo', 'img', 'rut_inst', 'user_id'];

    public function institucion()
    {
        return $this->belongsTo('Institucion');
    }
    public function user()
    {
    	return $this->belongsTo('User');
    }
}
