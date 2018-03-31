<div class="row">
   <div class="col-md-12">
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-sm-6 col-md-3">
               {!! Form::label('equipo_id','Nombre equipo', ['class' => 'text-blue']) !!}
               {!! Form::select('equipo_id', $relacion_nombreequipos, null, ['class' => 'select-search', 'placeholder' => 'selecciona equipo...'])!!}
               <span class="text-danger text-size-mini">{{$errors->first('equipo_id')}}</span>
            </div>
            <div class="col-sm-6 col-md-3">
               {!! Form::label('rival_id','Rival', ['class' => 'text-blue']) !!}
               {!! Form::select('rival_id', $relacion_rivales, null, ['class' => 'select-search', 'placeholder' => 'selecciona...'])!!}
               <span class="text-danger text-size-mini">{{$errors->first('rival_id')}}</span>
            </div>
            <div class="col-sm-6 col-md-3">
               {!! Form::label('dia_partido','Día partido', ['class' => 'text-blue']) !!}
               {!! Form::text('dia_partido', null, ['class' => 'form-control pickadate', 'placeholder' => 'año-mes-dia']) !!}
               <span class="text-danger text-size-mini">{{$errors->first('dia_partido')}}</span>
            </div>
            <div class="col-sm-6 col-md-3">
               {!! Form::label('tipo_partido','Tipo partido', ['class' => 'text-blue']) !!}
               {!! Form::select('tipo_partido', ['pretemporada' => 'pretemporada', 'temporada' => 'temporada', 'amistoso' => 'amistoso', 'torneo' => 'torneo'], null, ['class' => 'select', 'placeholder' => 'selecciona...'])!!}
               <span class="text-danger text-size-mini">{{$errors->first('tipo_partido')}}</span>
            </div>
            <div class="col-sm-6 col-md-3">
               {!! Form::label('condicion_partido','Condición partido', ['class' => 'text-blue']) !!}
               {!! Form::select('condicion_partido', ['local' => 'local', 'visitante' => 'visitante'], null, ['class' => 'select', 'placeholder' => 'selecciona...'])!!}
               <span class="text-danger text-size-mini">{{$errors->first('condicion_partido')}}</span>
            </div>
            <div class="col-sm-6 col-md-3">
               {!! Form::label('gol_equipo','Gol equipo', ['class' => 'text-blue']) !!}
               {!! Form::number('gol_equipo', null, ['class' => 'form-control', 'style' => 'text-transform:capitalize']) !!}
               <span class="text-danger text-size-mini">{{$errors->first('gol_equipo')}}</span>
            </div>
            <div class="col-sm-6 col-md-3">
               {!! Form::label('gol_rival','Gol rival', ['class' => 'text-blue']) !!}
               {!! Form::number('gol_rival', null, ['class' => 'form-control', 'style' => 'text-transform:capitalize']) !!}
               <span class="text-danger text-size-mini">{{$errors->first('gol_rival')}}</span>
            </div>
            <div class="col-sm-6 col-md-3">
               {!! Form::label('resultado_partido','Resultado', ['class' => 'text-blue']) !!}
               {!! Form::select('resultado_partido', ['ganado' => 'ganado', 'empatado' => 'empatado', 'perdido' => 'perdido'], null, ['class' => 'select', 'placeholder' => 'selecciona...'])!!}
               <span class="text-danger text-size-mini">{{$errors->first('resultado_partido')}}</span>
            </div>
         </div>
      </div>
      <div class="col s3">
         {!! Form::button('Enviar <i class="icon-arrow-right14 position-right"></i>', ['type' => 'submit', 'class' => 'btn bg-info pull-right'] ) !!}
         {{-- <button type="submit" class="btn bg-teal-400 pull-right">Enviar <i class="icon-arrow-right14 position-right"></i></button> --}}
      </div>
   </div>
</div>
