@extends("layouts.admin")

@section("list-articulos")
         <div class="col-sm-8">
   		<h2>Editar articulo: {{$articulo->articulo}}</h2>
         </div>
         <br>
         <br><div class="col">
             <a href="{{ route('articulos.index')}}" class="btn btn-default pull-right">Listado de Articulos</a>
            </div>
         @include('articulos.fragment.error')
        <div class="col-md-6">
             {!! Form::model ($articulo, ['route'=> ['articulos.update',$articulo->id], 'method'=>'PUT']) !!}

             @include ('articulos.fragment.form')

             {!! Form::close()!!}
         </div>
@endsection

