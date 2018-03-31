<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipoJugadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo_jugador', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('equipo_id')->unsigned();
            $table->integer('jugador_id')->unsigned();
            $table->string('foto_jugador_equipo')->nullable();
            $table->enum('rol_jugador_equipo', ['a definir...', 'portero','lateral derecho', 'lateral izquierdo', 'central derecho', 'central izquierdo', 'central centro', 'libero',
                        'medio centro defensivo', 'interior derecho', 'interior izquierdo', 'medio centro ofensivo', 'media punta',
                        'extremo derecho', 'extremo izquierdo', 'delantero']);
            $table->integer('edad_jugador_equipo')->nullable();
            $table->integer('peso_jugador_equipo')->nullable();
            $table->integer('altura_jugador_equipo')->nullable();
            $table->string('ficha_jugador_equipo')->nullable();
            $table->integer('club_procede_id')->unsigned();
            $table->timestamps();
            //relaciones
            $table->foreign('equipo_id')->references('id')->on('equipos');
            $table->foreign('jugador_id')->references('id')->on('jugadors');
            $table->foreign('club_procede_id')->references('id')->on('rivals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipo_jugador');
    }
}
