
<div id="modal_estadisticajugador-{{$jugador->id}}" class="modal fade">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header bg-warning">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            @foreach ($condiciones as $condicion)
               @endforeach
               {{$condicion->nombre_jugador}}
               {{$condicion->condicion_jugador_partido}}
               {{$condicion->veces}}

         </div>
         <div class="modal-body">

         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
         </div>
      </div>
   </div>
</div>
