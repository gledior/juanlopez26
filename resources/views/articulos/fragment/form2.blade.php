<div class="form-group">
      {!! Form::label ('nar','Nombre del producto') !!}
      {!! Form::text('articulo', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
      {!! Form::label ('name','Codigo del producto') !!}
      {!! Form::text('cod_articulo', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
      {!! Form::label ('name','Categoria del producto') !!}
      {!! Form::select('categorias', $categoria, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
      {!! Form::label ('name','Sub-categoria del producto') !!}
      {!! Form::select('sub_categorias', $sub_categoria, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
      {!! Form::label ('name','stock') !!}
      {!! Form::number('stock', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
      {!! Form::label ('name','stock minimo') !!}
      {!! Form::number('stock_min', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
      {!! Form::label ('name','stock maximo') !!}
      {!! Form::number('stock_max', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
      {!! Form::label ('name','Valor') !!}
      {!! Form::number('valor_unidad', null,['class' => 'form-control principal']) !!}
      {!! Form::select('simbolo', $moneda, null, ['class' => 'form-control  sub']) !!}
</div>
<div class="form-group">
    {{ Form::label('image', 'Imagen',['class' => 'custom-file-label']) }}
    {{ Form::file('image',['class' => 'custom-file-input']) }}
</div>
<div class="form-group">
      {!! Form::submit('Enviar', ['class' => 'btn btn-primary boton']) !!}
</div>
