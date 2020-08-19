<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class colorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker\Factory::create('tr_TR');
        for($i=0; $i<10 ; $i++){
            DB::table('colors')->insert([
                'name'=>$faker->colorName,
            ]);


        }
    }
}
