<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaImagen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagen_institucion', function (Blueprint $table) {
            $table->increments('id_imagen');
            $table->string('descripcion',100);
            $table->string('ruta');

            $table->integer('id_institucion')->unsigned();
            $table->foreign('id_institucion')->references('id_institucion')->on('institucion')->onDelete('cascade');

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
        Schema::disableForeignKeyConstraints();
        Schema::drop('imagen_institucion');
    }
}
