<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(userTableSeeder::class);
         $this->call(colorTableSeeder::class);
         $this->call(categoryTableSeeder::class);
         $this->call(brandTableSeeder::class);
         $this->call(sizeTableSeeder::class);
    }
}
