<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Plantilla extends Model
{
   protected $table = 'equipo_jugador';

   protected $fillable = [
      'equipo_id', 'jugador_id', 'foto_jugador_equipo', 'rol_jugador_equipo', 'edad_jugador_equipo', 'peso_jugador_equipo', 'altura_jugador_equipo', 'ficha_jugador_equipo', 'club_procede_id'
   ];

   public function partidos()
   {  //una plantilla de equipo tiene muchos equiposs
   return $this->belongsToMany(Partido::class, 'jugador_partido', 'equipojugador_id', 'partido_id')->withPivot('condicion_jugador_partido','minutos_jugados_jugador_partido', 'goles_jugador_partido',
   'asistencias_jugador_partido', 'tarjeta_amarilla_jugador_partido','tarjeta_roja_jugador_partido','analisis_jugador_partido');;
   }
   public function jugador()
   {  //un partido tiene y pertenece a un rival
      return $this->belongsTo(Jugador::class,'jugador_id');
   }
   public function rival()
   {  //un jugador de equipo tiene y pertenece a un rival
      return $this->belongsTo(Rival::class,'club_procede_id');
   }
   public function save(array $options = array()){
      $this->edad_jugador_equipo = Carbon::parse($this->jugador->fecha_nacimiento_jugador)->age;
      parent::save();
   }
}
