@extends("layouts.admin")

@section("list-articulos")
         <div class="col-sm-8">
   		<h2>Listado de Productos</h2>
         @include ('articulos.fragment.info')
   		<a href="{{ route('articulos.create')}}" class="btn btn-primary pull-right">Nuevo</a>
         <div><small>Total del stock de Articulos en el Inventario: {{$total}} </small></div>
   		<table class="table table-hover tabled-striped">
   			<thead>
   					<th>No.</th>
   					<th width="20px">Articulo</th>
   					<th>Cod. Articulo</th>
   			</thead>
   			<tbody>
   				@foreach($articulos as $articulo)
   				<tr>
   					<td>{{$var++}}</td>
   					<td>{{$articulo->articulo}}</td>
                  <td>{{$articulo->cod_articulo}}</td>
   					<td><a href="{{route('articulos.show', $articulo->id)}}" class="btn btn-link">ver</a> </td>
   					<td><a href="{{route('articulos.edit', $articulo->id)}}" class="btn btn-link">editar</a> </td>
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