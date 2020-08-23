<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('size')->insert(['name'=>'s']);
        DB::table('size')->insert(['name'=>'m']);
        DB::table('size')->insert(['name'=>'l']);
        DB::table('size')->insert(['name'=>'xl']);



    }
}
