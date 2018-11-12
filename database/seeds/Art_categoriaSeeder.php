<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Art_categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		    \DB::table('art_categoria')->insert(array(
		           'categoria' => 'Repuestos',
		           'created_at' => date('Y-m-d H:m:s'),
		           'updated_at' => date('Y-m-d H:m:s')
		    ));

		    \DB::table('art_categoria')->insert(array(
		           'categoria' =>'Insumos',
		           'created_at' => date('Y-m-d H:m:s'),
		           'updated_at' => date('Y-m-d H:m:s')
		    ));
		
    }
}
