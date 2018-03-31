<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nombreequipo_id')->unsigned();
            $table->integer('liga_id')->unsigned();
            $table->enum('temporada', ['17/18','18/19', '19/20', '20/21', '21/22', '22/23', '23/24',
                                       '24/25', '25/26', '26/27', '27/28', '28/29', '29/30']);
            $table->enum('categoria_equipo', ['futbol-7','futbol-11'])->nullable();
            $table->integer('user_id')->unsigned();
            $table->string('nombre_equipo')->nullable();
            $table->string('foto_equipo')->nullable();
            $table->text('comentario_equipo')->nullable();;
            $table->timestamps();
            //relaciones
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('nombreequipo_id')->references('id')->on('nombreequipos');
            $table->foreign('liga_id')->references('id')->on('ligas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
