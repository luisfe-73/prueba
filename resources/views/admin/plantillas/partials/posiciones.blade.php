@if ($jugador->rol_jugador_equipo == 'portero')
<div class="thumb img-xs">
      <img src="{{ asset('assets/images/posiciones/portero.png') }}" class="img-responsive img-xs">
   </a>
</div>
@elseif ($jugador->rol_jugador_equipo == 'lateral derecho')
<div class="thumb img-xs">
      <img src="{{ asset('assets/images/posiciones/lateral_derecho.png') }}" class="img-responsive img-xs">
   </a>
</div>
@elseif ($jugador->rol_jugador_equipo == 'lateral izquierdo')
<div class="thumb img-xs">
      <img src="{{ asset('assets/images/posiciones/lateral_izquierdo.png') }}" class="img-responsive img-xs">
   </a>
</div>
@elseif ($jugador->rol_jugador_equipo == 'central derecho')
<div class="thumb img-xs">
      <img src="{{ asset('assets/images/posiciones/central_derecho.png') }}" class="img-responsive img-xs">
   </a>
</div>
@elseif ($jugador->rol_jugador_equipo == 'central izquierdo')
<div class="thumb img-xs">
      <img src="{{ asset('assets/images/posiciones/central_izquierdo.png') }}" class="img-responsive img-xs">
   </a>
</div>
@elseif ($jugador->rol_jugador_equipo == 'central centro')
<div class="thumb img-xs">
      <img src="{{ asset('assets/images/posiciones/central_centro.png') }}" class="img-responsive img-xs">
   </a>
</div>
@elseif ($jugador->rol_jugador_equipo == 'libero')
<div class="thumb img-xs">
      <img src="{{ asset('assets/images/posiciones/libero.png') }}" class="img-responsive img-xs">
   </a>
</div>
@elseif ($jugador->rol_jugador_equipo == 'medio centro defensivo')
<div class="thumb img-xs">
      <img src="{{ asset('assets/images/posiciones/medio_centro_defensivo.png') }}" class="img-responsive img-xs">
   </a>
</div>
@elseif ($jugador->rol_jugador_equipo == 'interior derecho')
<div class="thumb img-xs">
      <img src="{{ asset('assets/images/posiciones/interior_derecho.png') }}" class="img-responsive img-xs">
   </a>
</div>
@elseif ($jugador->rol_jugador_equipo == 'interior izquierdo')
<div class="thumb img-xs">
      <img src="{{ asset('assets/images/posiciones/interior_izquierdo.png') }}" class="img-responsive img-xs">
   </a>
</div>
@elseif ($jugador->rol_jugador_equipo == 'medio centro ofensivo')
<div class="thumb img-xs">
      <img src="{{ asset('assets/images/posiciones/medio_centro_ofensivo.png') }}" class="img-responsive img-xs">
   </a>
</div>
@elseif ($jugador->rol_jugador_equipo == 'extremo izquierdo')
<div class="thumb img-xs">
      <img src="{{ asset('assets/images/posiciones/extremo_izquierdo.png') }}" class="img-responsive img-xs">
   </a>
</div>
@elseif ($jugador->rol_jugador_equipo == 'extremo derecho')
<div class="thumb img-xs">
      <img src="{{ asset('assets/images/posiciones/extremo_derecho.png') }}" class="img-responsive img-xs">
   </a>
</div>
@elseif ($jugador->rol_jugador_equipo == 'media punta')
<div class="thumb img-xs">
      <img src="{{ asset('assets/images/posiciones/media_punta.png') }}" class="img-responsive img-xs">
   </a>
</div>
@elseif ($jugador->rol_jugador_equipo == 'delantero')
<div class="thumb img-xs">
      <img src="{{ asset('assets/images/posiciones/delantero.png') }}" class="img-responsive img-xs">
   </a>
</div>
@endif
