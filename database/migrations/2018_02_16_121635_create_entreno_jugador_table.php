<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrenoJugadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreno_jugador', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entreno_id')->unsigned();
            $table->integer('jugador_id')->unsigned();
            $table->enum('asistencia_entreno_jugador', ['asiste','falta','lesion','permiso'])->default('asiste');
            $table->integer('peso_entreno_jugador')->nullable();
            $table->text('incidencias_entreno_jugador')->nullable();
            $table->timestamps();
            //relaciones
            $table->foreign('entreno_id')->references('id')->on('entrenos');
            $table->foreign('jugador_id')->references('id')->on('jugadors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entreno_jugador');
    }
}
