<div class="row">
   <div class="col-md-12">
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-sm-6 col-md-3 col-lg-3">
               {!! Form::label('nombre_jugador','Nombre', ['class' => 'text-blue']) !!}
               {!! Form::text('nombre_jugador', null, ['class' => 'form-control', 'style' => 'text-transform:capitalize']) !!}
               <span class="text-danger text-size-mini">{{$errors->first('nombre_jugador')}}</span>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
               {!! Form::label('apellidos_jugador','Apellidos', ['class' => 'text-blue']) !!}
               {!! Form::text('apellidos_jugador', null, ['class' => 'form-control', 'style' => 'text-transform:capitalize']) !!}
               <span class="text-danger text-size-mini">{{$errors->first('apellidos_jugador')}}</span>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
               {!! Form::label('nombre_futbol','Nombre futbol', ['class' => 'text-blue']) !!}
               {!! Form::text('nombre_futbol', null, ['class' => 'form-control', 'style' => 'text-transform:capitalize']) !!}
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
               {!! Form::label('fecha_nacimiento_jugador','Nacimiento', ['class' => 'text-blue']) !!}
               {!! Form::text('fecha_nacimiento_jugador', null, ['class' => 'form-control pickadate', 'placeholder' => 'año-mes-dia']) !!}
            </div>
         </div>
      </div>
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-sm-6 col-md-5 col-lg-5">
               {!! Form::label('direccion_completa_jugador','Dirección', ['class' => 'text-blue']) !!}
               {!! Form::text('direccion_completa_jugador', null, ['class' => 'form-control', 'id' => 'autocomplete']) !!}
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
               {!! Form::label('direccion_jugador','Dirección', ['class' => 'text-blue']) !!}
               {!! Form::text('direccion_jugador', null, ['class' => 'form-control', 'id' => 'route', 'readonly' => 'readonly']) !!}
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
               {!! Form::label('codigo_postal_jugador','Código postal', ['class' => 'text-blue']) !!}
               {!! Form::text('codigo_postal_jugador', null, ['class' => 'form-control', 'id' => 'postal_code', 'readonly' => 'readonly']) !!}
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
               {!! Form::label('poblacion_jugador','Población', ['class' => 'text-blue']) !!}
               {!! Form::text('poblacion_jugador', null, ['class' => 'form-control', 'id' => 'locality', 'readonly' => 'readonly']) !!}
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
               {!! Form::label('provincia_jugador','Provincia', ['class' => 'text-blue']) !!}
               {!! Form::text('provincia_jugador', null, ['class' => 'form-control', 'id' => 'administrative_area_level_2', 'readonly' => 'readonly']) !!}
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
               {!! Form::label('pais_jugador','País', ['class' => 'text-blue']) !!}
               {!! Form::text('pais_jugador', null, ['class' => 'form-control', 'id' => 'country', 'readonly' => 'readonly']) !!}
            </div>
         </div>
      </div>
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-sm-6 col-md-6 col-lg-6">
               {!! Form::label('estado_jugador','Estado', ['class' => 'text-blue']) !!}
               {!! Form::select('estado_jugador', ['activo' => 'activo', 'inactivo' => 'inactivo'], null, ['class' => 'select'])!!}
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
               {!! Form::label('telefono_jugador','Teléfono', ['class' => 'text-blue']) !!}
               {!! Form::text('telefono_jugador', null, ['class' => 'form-control', 'placeholder' => 'numero de 9 cifras', 'pattern' => '[0-9]{9}']) !!}
               <span class="text-danger text-size-mini">{{$errors->first('telefono_jugador')}}</span>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
               {!! Form::label('contacto_padre_jugador','Contacto padre', ['class' => 'text-blue']) !!}
               {!! Form::text('contacto_padre_jugador', null, ['class' => 'form-control', 'placeholder' => 'numero de 9 cifras', 'pattern' => '[0-9]{9}']) !!}
               <span class="text-danger text-size-mini">{{$errors->first('contacto_padre_jugador')}}</span>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
               {!! Form::label('contacto_madre_jugador','Contacto madre', ['class' => 'text-blue']) !!}
               {!! Form::text('contacto_madre_jugador', null, ['class' => 'form-control', 'placeholder' => 'numero de 9 cifras', 'pattern' => '[0-9]{9}']) !!}
               <span class="text-danger text-size-mini">{{$errors->first('contacto_madre_jugador')}}</span>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
               {!! Form::label('contacto_otro1_jugador','Contacto otro1', ['class' => 'text-blue']) !!}
               {!! Form::text('contacto_otro1_jugador', null, ['class' => 'form-control', 'placeholder' => 'numero de 9 cifras', 'pattern' => '[0-9]{9}']) !!}
               <span class="text-danger text-size-mini">{{$errors->first('contacto_otro1_jugador')}}</span>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
               {!! Form::label('contacto_otro2_jugador','Contacto otro2', ['class' => 'text-blue']) !!}
               {!! Form::text('contacto_otro2_jugador', null, ['class' => 'form-control', 'placeholder' => 'numero de 9 cifras', 'pattern' => '[0-9]{9}']) !!}
               <span class="text-danger text-size-mini">{{$errors->first('contacto_otro2_jugador')}}</span>
            </div>
         </div>
      </div>
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-sm-12 col-md-4">
               {!! Form::label('foto_jugador', 'Foto', ['class' => 'display-block text-blue']) !!}
               {!! Form::file('foto_jugador', ['class' => 'file-styled form-control'])!!}
               <span class="help-block">formatos: jpeg, png, jpg. Max 2Mb</span>
               <span class="text-danger text-size-mini">{{$errors->first('foto_jugador')}}</span>
            </div>
            <div class="col-sm-12 col-md-8">
               {!! Form::label('comentario_jugador','Comentarios', ['class' => 'text-blue']) !!}
               {!! Form::textarea('comentario_jugador', null, ['class' => 'form-control', 'data-length' => '190', 'size' => '25x3', 'style' => 'text-transform:lowercase', 'placeholder' => 'escribe tu texto aqui...']) !!}
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
