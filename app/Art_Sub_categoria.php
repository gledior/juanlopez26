<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Art_Sub_categoria extends Model
{
    protected $table='art_sub_categoria';
    protected $fillable=['id_categoria','art_sub_categoria'];

    public function articulos(){

    		return $this->hasMany('App\Articulos');

    }
    public function art_categoria(){

			return $this->belongsTo('App\Art_categoria','id_categoria');	

		}
}
