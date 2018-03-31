<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nombreequipo extends Model
{
   protected $fillable = [
      'nombre_nombreequipo', 'comentario_nombreequipo',
   ];
   public function equipos()
   {  //un nombre de equipo tiene muchos equiposs
      return $this->hasMany(Equipo::class);
   }
}
