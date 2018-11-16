<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    public $table='articulos';
    protected $fillable=['articulo','cod_articulo','art_categoria_id','art_subcategoria_id','stock','stock_min','stock_max','valor_unidad','moneda_id','descripcion'];

		public function art_categoria(){

					return $this->belongsTo('App\Art_categoria','art_categoria_id');	

		}
		public function art_sub_categoria(){

			return $this->belongsTo('App\Art_Sub_categoria','sub_categoria_di');	

		}
		public function moneda(){

			return $this->belongsTo('App\Moneda','moneda_id');	

		}
}
