<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaInstitucion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institucion', function (Blueprint $table) {
            $table->increments('id_institucion');
            $table->string('rut_inst');
            $table->string('nombre',60);
            $table->string('direccion',60)->nullable();
            $table->string('mision', 200);
            $table->string('vision', 200);
            $table->integer('telefono');
            $table->string('mail',50);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('institucion');
    }
}
