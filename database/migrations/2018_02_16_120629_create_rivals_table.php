<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRivalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rivals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_rival');
            $table->string('localidad_rival')->nullable();
            $table->string('poblacion_rival')->nullable();
            $table->string('provincia_rival')->nullable();
            $table->string('pais_rival')->nullable();
            $table->string('comentario_rival')->nullable();
            $table->timestamps();
            // //relaciones
            // $table->foreign('poblacion_id')->references('id')->on('poblacions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rivals');
    }
}
