<div class="row">
   <div class="col-md-12">
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-sm-6 col-md-6">
               {!! Form::label('nombre_liga','Nombre de la liga', ['class' => 'text-blue']) !!}
               {!! Form::text('nombre_liga', null, ['class' => 'form-control', 'style' => 'text-transform:lowercase']) !!}
               <span class="text-danger text-size-mini">{{$errors->first('nombre_liga')}}</span>
            </div>
            <div class="col-sm-6 col-md-6">
               {!! Form::label('categoria_liga','Categoria de la liga', ['class' => 'text-blue']) !!}
               {!! Form::select('categoria_liga', ['prebenjamin' => 'prebenjamin', 'benjamin' => 'benjamin', 'alevin' => 'alevin',
                              'infantil' => 'infantil', 'cadete' => 'cadete', 'juvenil' => 'juvenil', 'senior' => 'senior'], null, ['class' => 'select-search'])!!}
               <span class="text-danger text-size-mini">{{$errors->first('categoria_liga')}}</span>
            </div>
         </div>
      </div>
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-md-12">
               {!! Form::label('comentario_liga','Comentarios', ['class' => 'text-blue']) !!}
               {!! Form::textarea('comentario_liga', null, ['class' => 'form-control', 'data-length' => '190', 'size' => '25x3', 'style' => 'text-transform:lowercase', 'placeholder' => 'escribe tu texto aqui...']) !!}
            </div>
         </div>
      </div>
      <div class="col s3">
         {!! Form::button('Enviar <i class="icon-arrow-right14 position-right"></i>', ['type' => 'submit', 'class' => 'btn bg-teal-400 pull-right'] ) !!}
         {{-- {!! Form::submit('Pincha', ['class' => 'btn bg-teal-400 pull-right'])!!} boton --}}
      </div>
   </div>
</div>
