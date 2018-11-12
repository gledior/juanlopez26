<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('articulo',25);
            $table->char('cod_articulo',20);
            $table->integer('art_categoria_id')->unsigned();
            $table->integer('sub_categoria_di')->unsigned();
            $table->integer('stock');
            $table->integer('stock_min');
            $table->integer('stock_max');
            $table->float('valor_unidad',10,2);
            $table->integer('moneda_id')->unsigned();
            $table->char('descripcion',100)->nullable();
            $table->foreign('art_categoria_id')->references('id')->on('art_categoria')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sub_categoria_di')->references('id')->on('art_sub_categoria')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('moneda_id')->references('id')->on('monedas')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
