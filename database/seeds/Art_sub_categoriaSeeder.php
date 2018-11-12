<?php

use Illuminate\Database\Seeder;

class Art_sub_categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          \DB::table('art_sub_categoria')->insert(array(
		           'categoria_id' => 1,
		           'sub_categoria' =>'Caucho'
		    ));

		    \DB::table('art_sub_categoria')->insert(array(
		           'categoria_id' => 2,
		           'sub_categoria' =>'Aceite'
		    ));
		    \DB::table('art_sub_categoria')->insert(array(
		           'categoria_id' => 1,
		           'sub_categoria' =>'Amortiguador'
		    ));
		    \DB::table('art_sub_categoria')->insert(array(
		           'categoria_id' => 2,
		           'sub_categoria' =>'Refrigerante'
		    ));
    }
}
