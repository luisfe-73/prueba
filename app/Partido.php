<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
   protected $fillable = [
      'equipo_id', 'rival_id', 'dia_partido', 'tipo_partido', 'condicion_partido', 'gol_equipo', 'gol_rival', 'resultado_partido'
   ];
   public function equipo()
   {  //un partido tiene y pertenece a un equipo
      return $this->belongsTo(Equipo::class,'equipo_id');
   }
   public function rival()
   {  //un partido tiene y pertenece a un rival
      return $this->belongsTo(Rival::class,'rival_id');
   }
   public function jugadores()
   {  //un partido tiene y pertenece a varios jugadores
      return $this->belongsToMany(Jugador::class)->withPivot('condicion_jugador_partido','minutos_jugados_jugador_partido', 'goles_jugador_partido',
      'asistencias_jugador_partido', 'tarjeta_amarilla_jugador_partido','tarjeta_roja_jugador_partido','analisis_jugador_partido');
   }
   public function plantillas()
   {  //una plantilla de equipo tiene muchos equiposs
   return $this->belongsToMany(Plantilla::class, 'jugador_partido', 'partido_id', 'equipojugador_id')->withPivot('condicion_jugador_partido','minutos_jugados_jugador_partido', 'goles_jugador_partido',
   'asistencias_jugador_partido', 'tarjeta_amarilla_jugador_partido','tarjeta_roja_jugador_partido','analisis_jugador_partido');;
   }
   public function scopeNombreequipo($query, $nombreequipo_id)
   {
      // dd("scope".$nombreequipo_id);
      if(trim($nombreequipo_id) !=""){
         $query->where('equipo_id', "LIKE", "%$nombreequipo_id%");
      }
   }
}
