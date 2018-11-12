<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MonedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker=Faker::create();
		for ($i=0; $i < 4; $i++) {
		    \DB::table('monedas')->insert(array(
		           'simbolo' => $faker->randomElement(['$','Bs','BsF','Pc']),
		           'Descripcion'  => 'Moneda de mi pais',
		           'created_at' => date('Y-m-d H:m:s'),
		           'updated_at' => date('Y-m-d H:m:s')
		    ));
		}   
	}
}
