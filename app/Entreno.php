<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreno extends Model
{
   public function jugadores()
   {  //un entreno tiene y pertenece a varios jugadores
      return $this->belongsToMany(Jugador::class)->withPivot('asistencia_entreno_jugador','peso_entreno_jugador','incidencias_entreno_jugador');
   }
   public function equipos()
   {  //un entreno tiene y pertenece a un equipo
      return $this->belongsTo(Equipo::class, 'equipo_id');
   }
}
