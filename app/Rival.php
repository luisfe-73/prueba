<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rival extends Model
{
   protected $fillable = [
      'nombre_rival', 'localidad_rival', 'poblacion_rival', 'provincia_rival', 'pais_rival', 'comentario_rival',
   ];
   public function partidos()
   {  //un rival juega muchos partidos
      return $this->hasMany(Partido::class);
   }
   public function plantillas()
   {  //un rival juega muchos partidos
      return $this->hasMany(Plantilla::class);
   }
}
