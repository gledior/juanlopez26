@extends("layouts.admin")

@section("list-articulos")
         <div class="col-sm-8">
   		<h2>Listado de Productos</h2>
   		<a href="{{ route('articulos.create')}}" class="btn btn-primary pull-right">Nuevo</a>

   		<table class="table table-hover tabled-striped">
   			<thead>
   					<th>Id</th>
   					<th width="20px">Articulo</th>
   					<th>Cod. Articulo</th>
   			</thead>
   			<tbody>
   				@foreach($articulos as $articulo)
   				<tr>
   					<td>{{$articulo->id}}</td>
   					<td>{{$articulo->articulo}}</td>
   					<td><a href="{{route('articulos.show', $articulo->id)}}">ver</a> </td>
   					<td>editar</td>
   					<td>
                     <form action="{{route('articulos.destroy',$articulo->id)}}" method="post">
                     {!!csrf_field()!!}
                           <input type="hidden" name="_method" value="DELETE">
                           <input type="submit" class="btn btn-link" value="borrar">
                     </form>       
                  </td>
   				</tr>
   				@endforeach
   			</tbody>
   		</table>
   		{!!$articulos->render()!!}
         </div>

          <div class="col-sm-4">
         	


         </div>
@endsection