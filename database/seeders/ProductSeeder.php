<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Products')->insert([
            'product_name' => 'AMD',
            'category_id' =>14,
            'sub_category_id' => 3,
            'product_price' => 600
        ]);
        DB::table('Products')->insert([
            'product_name' => 'Airpods',
            'category_id' =>14,
            'product_price' => 750

        ]);
        DB::table('Products')->insert([
            'product_name' => 'MacPro',
            'category_id' =>14,
            'product_price' => 12000
        ]);
        DB::table('Products')->insert([
            'product_name' => 'Intel',
            'category_id' =>14,
            'sub_category_id' => 3,
            'product_price' => 950
        ]);
        DB::table('Products')->insert([
            'product_name' => 'Nova',
            'category_id' =>1,
            'product_price' => 1600
        ]);
        DB::table('Products')->insert([
            'product_name' => 'Galaxy S20',
            'category_id' =>1,
            'product_price' => 3200
        ]);
        DB::table('Products')->insert([
            'product_name' => 'iPhone 13 ProMax',
            'category_id' =>1,
            'product_price' => 5000
        ]);
    }
}
