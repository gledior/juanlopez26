<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Art_categoria extends Model
{
    protected $table='art_categoria';
    protected $fillable=['categoria'];
    
    public function articulos(){

    		return $this->hasMany('App\Articulos');
    }
    public function art_sub_categoria(){

    		return $this->hasMany('App\Art_Sub_categoria');
    }
}
