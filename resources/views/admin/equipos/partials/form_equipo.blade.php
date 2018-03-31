<div class="row">
   <div class="col-md-12">
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-sm-6 col-md-6 col-lg-3">
               {!! Form::label('nombre_equipo','Nombre equipo', ['class' => 'text-blue']) !!}
               {!! Form::select('nombreequipo_id', $relacion_nombreequipos, null, ['class' => 'select-search','placeholder' => 'selecciona...'])!!}
               <span class="text-danger text-size-mini">{{$errors->first('nombreequipo_id')}}</span>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
               {!! Form::label('liga_id','Nombre liga', ['class' => 'text-blue']) !!}
               {!! Form::select('liga_id', $relacion_ligas, null, ['class' => 'select-search', 'placeholder' => 'selecciona...'])!!}
               <span class="text-danger text-size-mini">{{$errors->first('liga_id')}}</span>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
               {!! Form::label('temporada','Temporada', ['class' => 'text-blue']) !!}
               {!! Form::select('temporada', ['17/18' => '17/18', '18/19' => '18/19', '19/20' => '19/20', '20/21' => '20/21',
                              '21/22' => '21/22', '22/23' => '22/23', '23/24' => '23/24', '24/25' => '24/25',
                              '25/26' => '25/26'], null, ['class' => 'select-search','placeholder' => 'selecciona...'])!!}
               <span class="text-danger text-size-mini">{{$errors->first('temporada')}}</span>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
               {!! Form::label('categoria_equipo','Categoría', ['class' => 'text-blue']) !!}
               {!! Form::select('categoria_equipo', ['futbol-7' => 'futbol-7', 'futbol-11' => 'futbol-11'], null, ['class' => 'select-search','placeholder' => 'selecciona...'])!!}
               <span class="text-danger text-size-mini">{{$errors->first('categoria_equipo')}}</span>
            </div>
         </div>
      </div>
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-md-6">
               {!! Form::label('user_id','Entrenador', ['class' => 'text-blue']) !!}
               {!! Form::select('user_id', $relacion_users, null, ['class' => 'select-search','placeholder' => 'selecciona...'])!!}
               <span class="text-danger text-size-mini">{{$errors->first('user_id')}}</span>
            </div>
            <div class="col-md-6">
               {!! Form::label('foto_equipo', 'Foto equipo', ['class' => 'display-block text-blue']) !!}
               {!! Form::file('foto_equipo', ['class' => 'file-styled form-control'])!!}
               <span class="help-block">formatos: jpeg, png, jpg. Max 2Mb</span>
               <span class="text-danger text-size-mini">{{$errors->first('foto_equipo')}}</span>
            </div>
         </div>
      </div>
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-sm-12 col-md-12">
               {!! Form::label('comentario_equipo','Comentarios', ['class' => 'text-blue']) !!}
               {!! Form::textarea('comentario_equipo', null, ['class' => 'form-control', 'data-length' => '190', 'size' => '25x3', 'style' => 'text-transform:lowercase', 'placeholder' => 'escribe tu texto aqui...']) !!}
            </div>
         </div>
      </div>
      <div class="col s3">
         {!! Form::button('Enviar <i class="icon-arrow-right14 position-right"></i>', ['type' => 'submit', 'class' => 'btn bg-info pull-right'] ) !!}
         {{-- <button type="submit" class="btn bg-teal-400 pull-right">Enviar <i class="icon-arrow-right14 position-right"></i></button> --}}
      </div>
   </div>
</div>
