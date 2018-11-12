@extends("layouts.admin")

@section("list-articulos")
         <div class="col-sm-8">
   		<h2>{{$articulo->articulo}}</h2>
         </div>
         <br>
         <br>
          <div class="row">
           <div class="col">
             <button type="button" class="btn btn-primary">Modificar</button>
            </div>
            <br>
         <div class="col" style="margin-left:1.5%">
            <label>categoria del articulo:</label>
            <h4>{{$articulo->art_categoria->categoria}}</h4>
            </div>
         </div>

            <br>

          <div class="row" >
            <div class="col-md-6">
            <label>codigo del articulo:</label>
              <h4> {{$articulo->cod_articulo}}</h4>
            </div>
         <br>
            <div class="col-md-6">
            <label>stock</label>
               <h4>{{$articulo->stock}}</h4>
            </div>
         <br> 
            <div class="col-md-6">
            <label>stock min:</label>
              <h4> {{$articulo->stock_min}}</h4>
            </div>
         <br>
            <div class="col-md-6">
            <label>stock max:</label>
              <h4> {{$articulo->stock_max}}</h4>
            </div>
            </div>
        
@endsection
