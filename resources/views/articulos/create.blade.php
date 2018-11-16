@extends("layouts.admin")

@section("list-articulos")
         <div class="col-sm-8">
   		<h2>Registrar articulo</h2>
        </div>
        <br>
        <br>
         
         <div class="col">
             <a href="{{ route('articulos.index')}}" class="btn btn-default pull-right">Regresr a la Lista de Articulos</a>
            </div>
        <br>
        <br>
        @include('articulos.fragment.error')
        
            <div class="col-md-6">
             {!! Form::open (['route'=> ['articulos.store'], 'method'=>'POST']) !!}

             @include ('articulos.fragment.form')

             {!! Form::close()!!}
        </div>
@endsection
