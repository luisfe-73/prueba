<div class="row">
   <div class="col-md-12">
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-sm-6 col-md-3">
               {!! Form::hidden('equipo_id') !!}
               {!! Form::label('equipo_id','Nombre equipo', ['class' => 'text-blue']) !!}
               {!! Form::select('equipo_id', $relacion_nombreequipos, null, ['class' => 'select-search','placeholder' => 'selecciona...'])!!}
               <span class="text-danger text-size-mini">{{$errors->first('equipo_id')}}</span>
            </div>
            <div class="col-sm-6 col-md-3">
               {!! Form::label('jugador_id','Nombre jugador', ['class' => 'text-blue']) !!}
               {!! Form::select('jugador_id', $relacion_jugadores, null, ['class' => 'select-search','placeholder' => 'selecciona...'])!!}
               <span class="text-danger text-size-mini">{{$errors->first('jugador_id')}}</span>
            </div>
            <div class="col-sm-6 col-md-3">
               {!! Form::label('rol_jugador_equipo','Rol', ['class' => 'text-blue']) !!}
               {!! Form::select('rol_jugador_equipo', ['a definir...' => 'a definir...', 'portero' => 'portero', 'lateral derecho' => 'lateral derecho',
               'lateral izquierdo' => 'lateral izquierdo', 'central derecho' => 'central derecho', 'central centro' => 'central centro',
               'libero' => 'libero', 'medio centro defensivo' => 'medio centro defensivo', 'interior derecho' => 'interior derecho',
               'interior izquierdo' => 'interior izquierdo', 'medio centro ofensivo' => 'medio centro ofensivo', 'media punta' => 'media punta',
               'extremo derecho' => 'extremo derecho', 'extremo izquierdo' => 'extremo izquierdo', 'delantero' => 'delantero'], null, ['class' => 'select-search','placeholder' => 'selecciona...'])!!}
               <span class="text-danger text-size-mini">{{$errors->first('rol_jugador_equipo')}}</span>
            </div>
            <div class="col-sm-6 col-md-3">
               {!! Form::label('club_procede_id','Club procede', ['class' => 'text-blue']) !!}
               {!! Form::select('club_procede_id', $relacion_rivales, null, ['class' => 'select-search','placeholder' => 'selecciona...'])!!}
               <span class="text-danger text-size-mini">{{$errors->first('club_procede_id')}}</span>
            </div>

         </div>
      </div>
      <div class="panel panel-flat">
         <div class="panel-body">
            {{-- <div class="col-sm-6 col-md-2">
               {!! Form::label('edad_jugador_equipo','Edad', ['class' => 'text-blue']) !!}
               {!! Form::number('edad_jugador_equipo', null, ['class' => 'form-control', 'style' => 'text-transform:capitalize']) !!}
            </div> --}}
            <div class="col-sm-6 col-md-2">
               {!! Form::label('peso_jugador_equipo','Peso', ['class' => 'text-blue']) !!}
               {!! Form::number('peso_jugador_equipo', null, ['class' => 'form-control', 'style' => 'text-transform:capitalize']) !!}
            </div>
            <div class="col-sm-6 col-md-2">
               {!! Form::label('altura_jugador_equipo','Altura', ['class' => 'text-blue']) !!}
               {!! Form::number('altura_jugador_equipo', null, ['class' => 'form-control', 'style' => 'text-transform:capitalize']) !!}
            </div>
            <div class="col-sm-12 col-md-3">
               {!! Form::label('foto_jugador_equipo', 'Foto', ['class' => 'display-block text-blue']) !!}
               {!! Form::file('foto_jugador_equipo', ['class' => 'file-styled form-control'])!!}
               <span class="help-block">formatos: jpeg, png, jpg. Max 2Mb</span>
               <span class="text-danger text-size-mini">{{$errors->first('foto_jugador_equipo')}}</span>
            </div>
            <div class="col-sm-12 col-md-3">
               {!! Form::label('ficha_jugador_equipo', 'Foto ficha', ['class' => 'display-block text-blue']) !!}
               {!! Form::file('ficha_jugador_equipo', ['class' => 'file-styled form-control'])!!}
               <span class="help-block">formatos: jpeg, png, jpg. Max 2Mb</span>
               <span class="text-danger text-size-mini">{{$errors->first('ficha_jugador_equipo')}}</span>
            </div>
         </div>
      </div>
      <div class="col s3">
         {!! Form::button('Enviar <i class="icon-arrow-right14 position-right"></i>', ['type' => 'submit', 'class' => 'btn bg-info pull-right'] ) !!}
         {{-- <button type="submit" class="btn bg-teal-400 pull-right">Enviar <i class="icon-arrow-right14 position-right"></i></button> --}}
      </div>
   </div>
</div>
<script type="text/javascript" src="{{ asset("assets/js/script_direccion.js")}}"></script>
