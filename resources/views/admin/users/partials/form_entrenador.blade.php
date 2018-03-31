<div class="row">
   <div class="col-md-12">
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-sm-4 col-md-3 col-lg-2">
               {!! Form::label('Nombre_user','Nombre', ['class' => 'text-blue']) !!}
               {!! Form::text('nombre_user', null, ['class' => 'form-control', 'style' => 'text-transform:capitalize']) !!}
               <span class="text-danger text-size-mini">{{$errors->first('nombre_user')}}</span>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-2">
               {!! Form::label('Apellidos_user','Apellidos', ['class' => 'text-blue']) !!}
               {!! Form::text('apellidos_user', null, ['class' => 'form-control', 'style' => 'text-transform:capitalize']) !!}
               <span class="text-danger text-size-mini">{{$errors->first('apellidos_user')}}</span>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3">
               {!! Form::label('email','Email', ['class' => 'text-blue']) !!}
               {!! Form::text('email', null, ['class' => 'form-control', 'style' => 'text-transform:lowercase']) !!}
               <span class="text-danger text-size-mini">{{$errors->first('email')}}</span>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-2">
               {!! Form::label('password','Contraseña', ['class' => 'text-blue']) !!}
               {!! Form::text('password', null, ['class' => 'form-control']) !!}
               <span class="text-danger text-size-mini">{{$errors->first('password')}}</span>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3">
               {!! Form::label('rol_user','Rol', ['class' => 'text-blue']) !!}
               {!! Form::select('rol_user', ['entrenador' => 'entrenador', 'administrador' => 'administrador'], null, ['class' => 'select'])!!}
            </div>
         </div>
      </div>
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-sm-6 col-md-5 col-lg-5">
               {!! Form::label('direccion_completa_user','Dirección', ['class' => 'text-blue']) !!}
               {!! Form::text('direccion_completa_user', null, ['class' => 'form-control', 'id' => 'autocomplete']) !!}
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
               {!! Form::label('direccion_user','Dirección', ['class' => 'text-blue']) !!}
               {!! Form::text('direccion_user', null, ['class' => 'form-control', 'id' => 'route', 'readonly' => 'readonly']) !!}
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
               {!! Form::label('codigo_postal_user','Código postal', ['class' => 'text-blue']) !!}
               {!! Form::text('codigo_postal_user', null, ['class' => 'form-control', 'id' => 'postal_code', 'readonly' => 'readonly']) !!}
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
               {!! Form::label('poblacion_user','Población', ['class' => 'text-blue']) !!}
               {!! Form::text('poblacion_user', null, ['class' => 'form-control', 'id' => 'locality', 'readonly' => 'readonly']) !!}
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
               {!! Form::label('provincia_user','Província', ['class' => 'text-blue']) !!}
               {!! Form::text('provincia_user', null, ['class' => 'form-control', 'id' => 'administrative_area_level_2', 'readonly' => 'readonly']) !!}
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
               {!! Form::label('pais_user','País', ['class' => 'text-blue']) !!}
               {!! Form::text('pais_user', null, ['class' => 'form-control', 'id' => 'country', 'readonly' => 'readonly']) !!}
            </div>
         </div>
      </div>
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-sm-4 col-md-6 col-lg-6">
               {!! Form::label('estado_user','Estado', ['class' => 'text-blue']) !!}
               {!! Form::select('estado_user', ['activo' => 'activo', 'inactivo' => 'inactivo', 'activo'], null, ['class' => 'select'])!!}
            </div>
            <div class="col-sm-4 col-md-6 col-lg-6">
               {!! Form::label('telefono_user','Teléfono', ['class' => 'text-blue']) !!}
               {!! Form::text('telefono_user', null, ['class' => 'form-control', 'placeholder' => 'numero de 9 cifras', 'pattern' => '[0-9]{9}']) !!}
            </div>
         </div>
      </div>
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-sm-6 col-md-6">
               {!! Form::label('foto_user', 'Foto entrenador', ['class' => 'display-block text-blue']) !!}
               {!! Form::file('foto_user', ['class' => 'file-styled form-control'])!!}
               <span class="help-block">formatos: jpeg, png, jpg. Max 2Mb</span>
               <span class="text-danger text-size-mini">{{$errors->first('foto_user')}}</span>
            </div>
            <div class="col-sm-6 col-md-6">
               {!! Form::label('ficha_user', 'Foto ficha', ['class' => 'display-block text-blue']) !!}
               {!! Form::file('ficha_user', ['class' => 'file-styled form-control'])!!}
               <span class="help-block">formatos: jpeg, png, jpg. Max 2Mb</span>
               <span class="text-danger text-size-mini">{{$errors->first('ficha_user')}}</span>
            </div>
         </div>
      </div>
      <div class="col s3">
         {!! Form::button('Enviar <i class="icon-arrow-right14 position-right"></i>', ['type' => 'submit', 'class' => 'btn bg-info pull-right'] ) !!}
         {{-- {!! Form::submit('Pincha', ['class' => 'btn bg-teal-400 pull-right'])!!} boton --}}
      </div>
   </div>
</div>
<script type="text/javascript" src="{{ asset("assets/js/script_direccion.js")}}"></script>
