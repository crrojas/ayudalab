<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institucion extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'institucion';
    protected $primaryKey="id_institucion";
    protected $fillable = ['rut_inst',
		'mision',
		'vision',
		'nombre',
		'direccion',
		'telefono',
		'mail'];


    /**
     * Indica que una Institución puede tener muchos aviso
     *
     * @return     <type>  ( description_of_the_return_value )
     */
    public function avisos() {
    	return $this->hasMany('App\Aviso','id_institucion', 'id_institucion');

    }

    public function noticias(){
        return $this->hasMany('App\Noticia', 'id_institucion', 'id_institucion');
    }


    //indica que una institucion tiene una imagen (Esta es la imagen principal de cada institución)
    public function imagen(){
        return $this->hasOne('App\Imagen','id_institucion', 'id_institucion');
       // return $this->hasOne('App\Imagen','id_imagen', 'id_imagen');
    }

    /**
     * Indica que una Institución puede tener muchos user
     *
     * @return     <type>  ( description_of_the_return_value )
     */
    public function user() {
    	return $this->hasMany('App\User', 'id_institucion','id_institucion');

    }
}
