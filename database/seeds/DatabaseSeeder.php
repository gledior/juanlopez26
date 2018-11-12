<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('MonedaSeeder'::class);
        $this->call('Art_categoriaSeeder'::class);
        $this->call('Art_sub_categoriaSeeder'::class);
    }
}
