<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_jugador');
            $table->string('apellidos_jugador')->nullable();
            $table->string('nombre_futbol')->nullable();
            $table->date('fecha_nacimiento_jugador')->nullable();
            $table->string('direccion_completa_jugador')->nullable();
            $table->string('direccion_jugador')->nullable();
            $table->string('codigo_postal_jugador')->nullable();
            $table->string('poblacion_jugador')->nullable();
            $table->string('provincia_jugador')->nullable();
            $table->string('pais_jugador')->nullable();
            $table->string('telefono_jugador')->nullable();
            $table->string('foto_jugador')->nullable();
            $table->enum('estado_jugador', ['activo','inactivo'])->default('activo');
            $table->string('contacto_padre_jugador')->nullable();
            $table->string('contacto_madre_jugador')->nullable();
            $table->string('contacto_otro1_jugador')->nullable();
            $table->string('contacto_otro2_jugador')->nullable();
            $table->string('comentario_jugador')->nullable();
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
        Schema::dropIfExists('jugadors');
    }
}
