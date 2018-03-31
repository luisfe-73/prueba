<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
   protected $fillable = [
      'nombreequipo_id', 'liga_id', 'temporada', 'categoria_equipo', 'user_id', 'nombre_equipo', 'foto_equipo', 'comentario_equipo',
   ];

   public function jugadores()
   {  //un equipo tiene y pertenece a muchos jugadores
      return $this->belongsToMany(Jugador::class)->withPivot('foto_jugador_equipo', 'rol_jugador_equipo', 'edad_jugador_equipo',
      'peso_jugador_equipo','altura_jugador_equipo','ficha_jugador_equipo','club_procede_id');
   }
   public function partidos()
   {  //un equipo juega muchos partidos
      return $this->hasMany(Partido::class);
   }
   public function entrenos()
   {  //un equipo tiene muchos entrenos
      return $this->hasMany(Entreno::class);
   }
   public function user()
   {  //un equipo tiene y pertenece a un entrenador-user
      return $this->belongsTo(User::class, 'user_id');
   }
   public function nombreequipo()
   {  //un equipo tiene y pertenece a una nombre de equipo
      return $this->belongsTo(Nombreequipo::class, 'nombreequipo_id');
   }
   public function liga()
   {  //un equipo tiene y pertenece a una liga
      return $this->belongsTo(Liga::class, 'liga_id');
   }
   //metodo para que rellene campo nombre_jugador con datos de otros campos
   public function save(array $options = array()){
      $this->nombre_equipo = $this->nombreequipo->nombre_nombreequipo.' '.$this->temporada;
      parent::save();
   }
   public function scopeNombreplantilla($query, $nombreequipo_id)
   {
      //dd("scope ".$nombreequipo_id);
      if(trim($nombreequipo_id) !=""){
         $query->where('id', "LIKE", "%$nombreequipo_id%");
      }
   }

}
