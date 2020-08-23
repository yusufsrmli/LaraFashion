<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $faker = Faker\Factory::create('tr_TR');
        for($i=0; $i<10; $i++){
            DB::table('users')->insert([
               'name'=> $faker->name,
               'email'=> $faker->email(5),
               'password' => bcrypt('password'),
            ]);
        }
        DB::table('users')->insert([
           'name' => 'admin',
           'email' => 'admin@gmail.com',
           'password' => bcrypt('12345678'),
           'role' => 'admin'
        ]);
    }
}
