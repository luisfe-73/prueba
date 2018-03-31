<div class="row">
   <div class="col-md-12">
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-sm-6 col-md-2">
               {!! Form::hidden('partido_id') !!}
               {!! Form::label('condicion_jugador_partido','Rol', ['class' => 'text-blue']) !!}
               {!! Form::select('condicion_jugador_partido', ['a definir...' => 'a definir...', 'titular' => 'titular',
               'suplente' => 'suplente', 'lesionado' => 'lesionado', 'no convocado' => 'no convocado'], null, ['class' => 'select-search','placeholder' => 'selecciona...'])!!}
               <span class="text-danger text-size-mini">{{$errors->first('condicion_jugador_partido')}}</span>
            </div>
            <div class="col-sm-6 col-md-2">
               {!! Form::label('minutos_jugados_jugador_partido','Minutos', ['class' => 'text-blue']) !!}
               {!! Form::number('minutos_jugados_jugador_partido', null, ['class' => 'form-control', 'style' => 'text-transform:capitalize']) !!}
            </div>
            <div class="col-sm-6 col-md-2">
               {!! Form::label('goles_jugador_partido','Goles', ['class' => 'text-blue']) !!}
               {!! Form::number('goles_jugador_partido', null, ['class' => 'form-control', 'style' => 'text-transform:capitalize']) !!}
            </div>
            <div class="col-sm-6 col-md-2">
               {!! Form::label('asistencias_jugador_partido','Asistencias', ['class' => 'text-blue']) !!}
               {!! Form::number('asistencias_jugador_partido', null, ['class' => 'form-control', 'style' => 'text-transform:capitalize']) !!}
            </div>
            <div class="col-sm-6 col-md-2">
               {!! Form::label('tarjeta_amarilla_jugador_partido','T. amarillas', ['class' => 'text-blue']) !!}
               {!! Form::number('tarjeta_amarilla_jugador_partido', null, ['class' => 'form-control', 'style' => 'text-transform:capitalize']) !!}
            </div>
            <div class="col-sm-6 col-md-2">
               {!! Form::label('tarjeta_roja_jugador_partido','T. rojas', ['class' => 'text-blue']) !!}
               {!! Form::number('tarjeta_roja_jugador_partido', null, ['class' => 'form-control', 'style' => 'text-transform:capitalize']) !!}
            </div>
         </div>
      </div>
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-sm-12 col-md-12">
               {!! Form::label('analisis_jugador_partido','Análisis', ['class' => 'text-blue']) !!}
               {!! Form::textarea('analisis_jugador_partido', null, ['class' => 'form-control', 'data-length' => '190', 'size' => '25x3', 'style' => 'text-transform:lowercase', 'placeholder' => 'escribe tu texto aqui...']) !!}
            </div>
         </div>
      </div>
      <div class="col s3">
         {!! Form::button('Enviar <i class="icon-arrow-right14 position-right"></i>', ['type' => 'submit', 'class' => 'btn bg-info pull-right'] ) !!}
         {{-- <button type="submit" class="btn bg-teal-400 pull-right">Enviar <i class="icon-arrow-right14 position-right"></i></button> --}}
      </div>
   </div>
</div>
