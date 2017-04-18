<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    protected $table = 'aviso';
    protected $primaryKey="id_aviso";
    protected $fillable = ['descripcion', 'titulo', 'rut_inst', 'user_id'];

    /**
     * Indica que un Aviso pertenece a una Institucion
     *
     * @return     <type>  ( description_of_the_return_value )
     */
    public function institucion()
    {
        return $this->belongsTo('App\Institucion', 'id_institucion', 'id_institucion');
    }

    /**
     * Indica que un Aviso pertenece a un User
     *
     * @return     <type>  ( description_of_the_return_value )
     */
    public function user()
    {
    	return $this->belongsTo('User');
    }

    public function imagenes(){
        //hasMany(ClaseDestino, llave foranea, llave local a la que apunta la FK)
        return $this->hasMany('App\ImagenEvento','id_aviso','id_aviso');
    }
}
