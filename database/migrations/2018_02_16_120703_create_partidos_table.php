<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('equipo_id')->unsigned();
            $table->integer('rival_id')->unsigned();
            $table->date('dia_partido')->nullable();;
            $table->enum('tipo_partido', ['pretemporada','temporada','amistoso','torneo']);
            $table->enum('condicion_partido', ['local','visitante'])->default('local');
            $table->integer('gol_equipo')->nullable();;
            $table->integer('gol_rival')->nullable();;
            $table->enum('resultado_partido', ['ganado','empatado','perdido']);
            $table->timestamps();
            //relaciones
            $table->foreign('equipo_id')->references('id')->on('equipos');
            $table->foreign('rival_id')->references('id')->on('rivals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidos');
    }
}
