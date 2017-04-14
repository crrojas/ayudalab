<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImagenEvento extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

  	protected $table='imagen_evento';

    protected $guarded = [];
    //public $incrementing = false;
    protected $primaryKey='id_imagen';

    public function aviso(){
    	return $this->belongsTo('App\Aviso','id_aviso');
    }

    public function noticia(){
    	return $this->belongsTo('App\Aviso','id_noticia');
    }

}
