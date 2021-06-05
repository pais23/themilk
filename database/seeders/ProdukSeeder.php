<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => 'Mocca Milk',
            'price' => '29000',
            'image' => '4.jpeg',
        ]);

        DB::table('products')->insert([
            'product_name' => 'Plain Milk',
            'price' => '29000',
            'image' => '1.jpeg',
        ]);

        DB::table('products')->insert([
            'product_name' => 'Cocoa Milk',
            'price' => '28500',
            'image' => '2.jpeg',
        ]);

        DB::table('products')->insert([
            'product_name' => 'Milk Tea',
            'price' => '29900',
            'image' => '5.jpeg',
        ]);

        DB::table('products')->insert([
            'product_name' => 'Plain (Small)',
            'price' => '17500',
            'image' => '8.jpg',
        ]);

        DB::table('products')->insert([
            'product_name' => 'Manggo',
            'price' => '17500',
            'image' => '7.jpeg',
        ]);

        DB::table('products')->insert([
            'product_name' => 'Macha',
            'price' => '17000',
            'image' => '6.jpeg',
        ]);

        DB::table('products')->insert([
            'product_name' => 'Dark Chocolate (Small)',
            'price' => '17000',
            'image' => '9.jpeg',
        ]);
    }
}
