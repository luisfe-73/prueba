<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
   protected $fillable = [
      'nombre_club', 'email_club', 'direccion_completa_club', 'direccion_club',
      'codigo_postal_club', 'poblacion_club', 'provincia_club', 'pais_club', 'telefono_club', 'escudo_club',
   ];
}
