<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker=Faker::create();
    	for ($i=0; $i < 5; $i++) { 
    		
          \DB::table('articulos')->insert(array(
		           'articulo' => $faker->randomElement(['Caucho','Amortiguador','Aceite','Correa']),
		           'cod_articulo' =>$faker->unique()->randomDigit,
		           'art_categoria_id'=>$faker->randomElement([1,2]),
		           'sub_categoria_di'=>$faker->randomElement([1,2,3]),
		           'stock'=>10,
		           'stock_min'=>5,
		           'stock_max'=>50,
		           'valor_unidad'=>$faker->randomDigit,
		           'moneda_id'=>$faker->randomElement([1,2,3,4])
		    ));

    	}
    }
}
