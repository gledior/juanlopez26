@extends("layouts.admin")

@section("list-articulos")
         <div class="col-sm-8">
   		<h2>{{$articulo->articulo}}</h2>
         </div>
         <br>
         <br><div class="col">
             <button type="button" class="btn btn-primary">Modificar</button>
            </div>
          <div class="row">
         <div class="col-md-6"  >
            <label>categoria del articulo:</label>
            <h4>{{$articulo->art_categoria->categoria}}</h4>
            </div>
             <div class="col-md-6" style="margin-left:-20%">
            <label>Sub-categoria:</label>
              <h4> {{$articulo->art_sub_categoria->sub_categoria}}</h4>
            </div>

            <div class="col-md-6">
            <label></label>
              <img class="card-img-top" src="../public/app/public/articulos_img/{{$articulo->imagen}}">
            </div>
         </div>

            <br>

          <div class="row" >
            <div class="col-md-6">
            <label>codigo del articulo:</label>
              <h4> {{$articulo->cod_articulo}}</h4>
            </div>
         <br>
            <div class="col-md-6" style="margin-left:-20%">
            <label>stock</label>
               <h4>{{$articulo->stock}}</h4>
            </div>
         <br> 
            <div class="col-md-6">
            <label>stock min:</label>
              <h4> {{$articulo->stock_min}}</h4>
            </div>
         <br>
            <div class="col-md-6" style="margin-left:-20%">
            <label>stock max:</label>
              <h4> {{$articulo->stock_max}}</h4>
            </div>
            </div>
        <div class="row" >
          <div class="col-md-6">
            <label>Precio:</label>
              <h4> {{$articulo->valor_unidad}}{{$articulo->moneda->simbolo}}</h4>
          </div>
        </div>
@endsection
