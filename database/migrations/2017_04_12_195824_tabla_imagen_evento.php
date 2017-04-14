<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaImagenEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagen_evento', function (Blueprint $table) {
            $table->increments('id_imagen');
            $table->string('descripcion',100);
            $table->string('ruta');
            $table->integer('id_noticia')->unsigned()->nullable();
            $table->foreign('id_noticia')->references('id_noticia')->on('noticia');
            $table->integer('id_aviso')->unsigned()->nullable();
            $table->foreign('id_aviso')->references('id_aviso')->on('aviso');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('imagen_evento');
    }
}
