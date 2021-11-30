<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'make' => Str::random(10),
            'model' => Str::random(10),
            'year' => rand(1990,2021),
            'mileage' => rand(0,200000),
            'color' => '#' . dechex(rand(0, 255)),
            'price' => rand(1000,100000),
            
        ]);
    }
}
