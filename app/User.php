<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_user', 'apellidos_user', 'email', 'password', 'rol_user', 'estado_user', 'direccion_completa_user', 'direccion_user',
        'codigo_postal_user', 'poblacion_user', 'provincia_user', 'pais_user', 'telefono_user', 'foto_user', 'ficha_user',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

   public function equipos()
   {  //un entrenador-user tiene varios equipos
      return $this->hasMany(Equipo::class);
   }
}
