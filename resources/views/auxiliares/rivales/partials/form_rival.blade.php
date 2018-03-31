<div class="row">
   <div class="col-md-12">
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-sm-12 col-md-12">
               {!! Form::label('nombre_rival','Nombre de rival', ['class' => 'text-blue']) !!}
               {!! Form::text('nombre_rival', null, ['class' => 'form-control', 'style' => 'text-transform:capitalize']) !!}
               <span class="text-danger text-size-mini">{{$errors->first('nombre_rival')}}</span>
            </div>
            <div class="col-sm-12 col-md-12">
               {!! Form::label('localidad_rival','Localidad', ['class' => 'text-blue']) !!}
               {!! Form::text('localidad_rival', null, ['class' => 'form-control', 'id' => 'autocomplete']) !!}
            </div>
            <div class="col-sm-6 col-md-4">
               {!! Form::label('poblacion_rival','Poblacion', ['class' => 'text-blue']) !!}
               {!! Form::text('poblacion_rival', null, ['class' => 'form-control', 'id' => 'locality', 'readonly' => 'readonly']) !!}
            </div>
            <div class="col-sm-6 col-md-4">
               {!! Form::label('provincia_rival','Provincia', ['class' => 'text-blue']) !!}
               {!! Form::text('provincia_rival', null, ['class' => 'form-control', 'id' => 'administrative_area_level_2', 'readonly' => 'readonly']) !!}
            </div>
            <div class="col-sm-6 col-md-4">
               {!! Form::label('pais_rival','Pais', ['class' => 'text-blue']) !!}
               {!! Form::text('pais_rival', null, ['class' => 'form-control', 'id' => 'country', 'readonly' => 'readonly']) !!}
            </div>
         </div>
      </div>
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-md-12">
               {!! Form::label('comentario_rival','Comentario', ['class' => 'text-blue']) !!}
               {!! Form::textarea('comentario_rival', null, ['class' => 'form-control', 'data-length' => '190', 'size' => '25x3', 'style' => 'text-transform:lowercase', 'placeholder' => 'escribe tu texto aqui...']) !!}
            </div>
         </div>
      </div>
      <div class="col s3">
         {!! Form::button('Enviar <i class="icon-arrow-right14 position-right"></i>', ['type' => 'submit', 'class' => 'btn bg-teal-400 pull-right'] ) !!}
         {{-- {!! Form::submit('Pincha', ['class' => 'btn bg-teal-400 pull-right'])!!} boton --}}
      </div>
   </div>
</div>
<script type="text/javascript" src="{{ asset("assets/js/script_poblacion.js")}}"></script>
