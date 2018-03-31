
<div id="modal_verjugador-{{$jugador->id}}" class="modal fade">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header bg-warning">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h6 class="modal-title"><b>Nombre:</b>&nbsp; {{$jugador->nombre_jugador}} {{$jugador->apellidos_jugador}}</p></h6>
         </div>
         <div class="modal-body">
            <h6 class="text-semibold">INFORMACIÓN</h6><hr>
               <b>Nacimiento:</b>&nbsp; {{$jugador->fecha_nacimiento_jugador}}</p>
               <b>Dirección:</b>&nbsp; {{$jugador->direccion_jugador}}</p>
               <b>Codigo postal:</b>&nbsp; {{$jugador->codigo_postal_jugador}}</p>
               <b>Población:</b>&nbsp; {{$jugador->poblacion_jugador}}</p>
               <b>Provincia:</b>&nbsp; {{$jugador->provincia_jugador}}</p>
               <b>País:</b>&nbsp; {{$jugador->pais_jugador}}</p>
               <b>Telefono:</b>&nbsp; {{$jugador->telefono_jugador}}</p>
               <b>Contacto padre:</b>&nbsp; {{$jugador->contacto_padre_jugador}}</p>
               <b>Contacto madre:</b>&nbsp; {{$jugador->contacto_madre_jugador}}</p>
               <b>Contacto otro1:</b>&nbsp; {{$jugador->contacto_otro1_jugador}}</p>
               <b>Contacto otro2:</b>&nbsp; {{$jugador->contacto_otro2_jugador}}</p>
            <hr>
            <h6 class="text-semibold">Comentarios</h6>
            <p>{{$jugador->comentario_jugador}}</p>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
         </div>
      </div>
   </div>
</div>
