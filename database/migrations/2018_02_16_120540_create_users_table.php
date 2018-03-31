<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_user');
            $table->string('apellidos_user');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->enum('rol_user', ['administrador','entrenador'])->default('entrenador');
            $table->enum('estado_user', ['activo','inactivo'])->default('activo');
            $table->string('direccion_completa_user')->nullable();
            $table->string('direccion_user')->nullable();
            $table->string('codigo_postal_user')->nullable();
            $table->string('poblacion_user')->nullable();
            $table->string('provincia_user')->nullable();
            $table->string('pais_user')->nullable();
            $table->string('telefono_user')->nullable();
            $table->string('foto_user')->nullable();
            $table->string('ficha_user')->nullable();
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
        Schema::dropIfExists('users');
    }
}
