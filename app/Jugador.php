<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;

class Jugador extends Model
{
   protected $fillable = [
      'nombre_jugador', 'apellidos_jugador', 'nombre_futbol', 'fecha_nacimiento_jugador', 'direccion_completa_jugador', 'direccion_jugador', 'codigo_postal_jugador',
      'poblacion_jugador', 'provincia_jugador', 'pais_jugador', 'telefono_jugador', 'foto_jugador', 'estado_jugador', 'contacto_padre_jugador', 'contacto_madre_jugador',
      'contacto_otro1_jugador', 'contacto_otro2_jugador', 'comentario_jugador',
   ];
   public function equipos()
   {  //un jugador tiene y pertenece a varios equipos
      return $this->belongsToMany(Equipo::class)->withPivot('foto_jugador_equipo', 'rol_jugador_equipo', 'edad_jugador_equipo','peso_jugador_equipo','altura_jugador_equipo','ficha_jugador_equipo','club_procede_id');
   }
   public function partidos()
   {  //un jugador tiene y pertenece a varios partidos
      return $this->belongsToMany(Partido::class)->withPivot('condicion_jugador_partido','minutos_jugados_jugador_partido', 'goles_jugador_partido',
      'asistencias_jugador_partido', 'tarjeta_amarilla_jugador_partido', 'tarjeta_roja_jugador_partido','analisis_jugador_partido');
   }
   public function plantillas()
   {  //un rival juega muchos partidos
      return $this->hasMany(Plantilla::class);
   }
   public function entrenos()
   {  //un jugador tiene y pertenece a varios entrenos
      return $this->belongsToMany(Entreno::class);
   }
   //scope para busqueda de jugador
   // public function scopeName($query, $name)
   // {
   //    if(trim($name) !=""){
   //       $query->where('nombre', "LIKE", "%$name%");
   //    }
   // }
   // public function save(array $options = array()){
   //    $edad = Carbon::parse($this->fecha_nacimiento_jugador)->age;
   //    $this->edad_jugador = $edad;
   //    parent::save();
   // }
}
