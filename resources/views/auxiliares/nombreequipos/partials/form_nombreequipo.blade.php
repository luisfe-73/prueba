<div class="row">
   <div class="col-md-12">
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-md-12">
               {!! Form::label('nombre_nombreequipo','Nombre de equipo', ['class' => 'text-blue']) !!}
               {!! Form::text('nombre_nombreequipo', null, ['class' => 'form-control', 'style' => 'text-transform:lowercase']) !!}
               <span class="text-danger text-size-mini">{{$errors->first('nombre_nombreequipo')}}</span>
            </div>
         </div>
      </div>
      <div class="panel panel-flat">
         <div class="panel-body">
            <div class="col-md-12">
               {!! Form::label('comentario_nombreequipo','Comentario', ['class' => 'text-blue']) !!}
               {!! Form::textarea('comentario_nombreequipo', null, ['class' => 'form-control', 'data-length' => '190', 'size' => '25x3', 'style' => 'text-transform:lowercase', 'placeholder' => 'escribe tu texto aqui...']) !!}
            </div>
         </div>
      </div>
      <div class="col s3">
         {!! Form::button('Enviar <i class="icon-arrow-right14 position-right"></i>', ['type' => 'submit', 'class' => 'btn bg-teal-400 pull-right'] ) !!}
         {{-- {!! Form::submit('Pincha', ['class' => 'btn bg-teal-400 pull-right'])!!} boton --}}
      </div>
   </div>
</div>
