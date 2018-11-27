<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Articulos;
use App\Moneda;
use App\Art_categoria;
use App\Art_Sub_categoria;
use App\Http\Requests\ArticuloRequest;
use Illuminate\Support\Facades\Storage;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos=Articulos::orderBy('id','asc')->paginate();
        $total=stock($articulos);
        $var=1;
        //print_r($articulos);
        return view('articulos.index',compact('articulos','var','total'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $moneda=Moneda::all()->pluck('simbolo','id');
        $categoria=Art_categoria::all()->pluck('categoria','id');
        $sub_categoria=Art_Sub_categoria::all()->pluck('sub_categoria','id');
        return view('articulos.create',compact('moneda','sub_categoria','categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         

        /* if($request->file('image')){
              $file = $request->file('image');
            $nombre = $file->getClientOriginalName();

            Storage::disk('public')->put($nombre,  \File::get($file));
        
        }*/
        
        if($request->file('image')){
            $path = Storage::disk('public')->put('articulos_img',  $request->file('image'));
        }
      

      $articulo=new Articulos;

        $articulo->articulo=$request->articulo;
        $articulo->cod_articulo=$request->cod_articulo;
        $articulo->art_categoria_id=$request->categorias;
        $articulo->sub_categoria_di=$request->sub_categorias;
        $articulo->stock=$request->stock;
        $articulo->stock_min=$request->stock_min;
        $articulo->stock_max=$request->stock_max;
        $articulo->valor_unidad=$request->valor_unidad;
        $articulo->moneda_id=$request->simbolo;
        
        $articulo->imagen= $path;
        $articulo->save();

        return redirect()->route('articulos.index')->with('info','El articulo fue creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articulo=Articulos::find($id);
        return view('articulos.show',compact('articulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $articulo=Articulos::find($id);
         $moneda=Moneda::all()->pluck('simbolo','id');
         $categoria=Art_categoria::all()->pluck('categoria','id');
         $sub_categoria=Art_Sub_categoria::all()->pluck('sub_categoria','id');
        return view('articulos.edit',compact('articulo','moneda','sub_categoria','categoria'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticuloRequest $request, $id)
    {
        $articulo=Articulos::find($id);

        $articulo->articulo=$request->articulo;
        $articulo->cod_articulo=$request->cod_articulo;
        $articulo->art_categoria_id=$request->categorias;
        $articulo->sub_categoria_di=$request->sub_categorias;
        $articulo->stock=$request->stock;
        $articulo->stock_min=$request->stock_min;
        $articulo->stock_max=$request->stock_max;
        $articulo->valor_unidad=$request->valor_unidad;
        $articulo->moneda_id=$request->simbolo;

        $articulo->save();

        return redirect()->route('articulos.index')->with('info','El articulo fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo=Articulos::find($id);
        $articulo->delete();

        return back()->with('info','El articulo fue eliminado');
    }
}
