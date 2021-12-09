<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=> 'Playstation 5',
            'detail' => Str::random(10),
            
        ]);

        DB::table('products')->insert([
            'name'=> 'Samsung Galaxy ',
            'detail' => Str::random(10),
        ]);
        DB::table('products')->insert([
            'name'=> 'Iphone 13 Pro',
            'detail' => Str::random(10),
        ]);
        DB::table('products')->insert([
            'name'=> 'Playstation 4',
            'detail' => Str::random(10),
        ]);
    }
}
