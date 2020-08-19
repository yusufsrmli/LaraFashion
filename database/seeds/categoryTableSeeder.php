<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert(['name'=>'sweater']);
        DB::table('category')->insert(['name'=>'t-shirt']);
        DB::table('category')->insert(['name'=>'shoes']);
        DB::table('category')->insert(['name'=>'coat']);

    }
}

