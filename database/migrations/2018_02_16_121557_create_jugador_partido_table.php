<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadorPartidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugador_partido', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('partido_id')->unsigned();
            $table->integer('equipojugador_id')->unsigned();
            $table->enum('condicion_jugador_partido', ['a definir...', 'titular','suplente','lesionado','no convocado']);
            $table->integer('minutos_jugados_jugador_partido')->unsigned();
            $table->integer('goles_jugador_partido')->unsigned();
            $table->integer('asistencias_jugador_partido')->unsigned();
            $table->integer('tarjeta_amarilla_jugador_partido')->unsigned();
            $table->integer('tarjeta_roja_jugador_partido')->unsigned();
            $table->integer('id_equipo')->unsigned();
            $table->integer('id_jugador')->unsigned();
            $table->string('analisis_jugador_partido')->nullable();
            $table->timestamps();
            //relaciones
            $table->foreign('partido_id')->references('id')->on('partidos');
            $table->foreign('equipojugador_id')->references('id')->on('equipo_jugador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugador_partido');
    }
}
