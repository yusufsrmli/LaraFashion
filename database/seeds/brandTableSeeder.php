<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class brandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brand')->truncate();
        DB::table('brand')->insert(['name'=>'armani']);
        DB::table('brand')->insert(['name'=>'gucci']);
        DB::table('brand')->insert(['name'=>'balenciaga']);
    }
}
