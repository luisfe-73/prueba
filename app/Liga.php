<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liga extends Model
{
   protected $fillable = [
      'nombre_liga', 'categoria_liga', 'liga', 'comentario_liga',
   ];
   public function equipos()
  {  //una liga la juegan varios equipos
     return $this->hasMany(Equipo::class);
  }
  //metodo para que rellene campo nombre_jugador con datos de otros campos
  public function save(array $options = array()){
     $this->liga = $this->nombre_liga.' '.$this->categoria_liga;
     parent::save();
  }
}
