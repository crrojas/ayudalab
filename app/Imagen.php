<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imagen extends Model
{
    use SoftDeletes;
   protected $dates = ['deleted_at'];
   protected $table='imagen_institucion';

    protected $guarded = [];
    //public $incrementing = false;
    protected $primaryKey='id_imagen';

    public function institucion(){
    	return $this->belongsTo('App\Institucion','id_institucion','id_institucion');
    }


}
