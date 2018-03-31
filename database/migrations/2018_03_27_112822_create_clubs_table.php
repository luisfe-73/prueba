<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_club');
            $table->string('email_club')->nullable();
            $table->string('direccion_completa_club')->nullable();
            $table->string('direccion_club')->nullable();
            $table->string('codigo_postal_club')->nullable();
            $table->string('poblacion_club')->nullable();
            $table->string('provincia_club')->nullable();
            $table->string('pais_club')->nullable();
            $table->string('telefono_club')->nullable();
            $table->string('escudo_club')->nullable();
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
        Schema::dropIfExists('clubs');
    }
}
