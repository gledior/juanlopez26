<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    protected $table='monedas';
    protected $fillable=['simbolo','descripcion'];

    public function articulos(){

    		return $this->hasMany('App\Articulos');

    }
}
