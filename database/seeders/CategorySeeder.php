<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'Smart Phone',
            'company_id' =>5
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Laptop',
            'company_id' =>5
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Headphone',
            'company_id' =>5
        ]);
        DB::table('categories')->insert([
            'category_name' => 'TV',
            'company_id' =>5
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Smart Phone',
            'company_id' =>2
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Laptop',
            'company_id' =>2
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Headphone',
            'company_id' =>2
        ]);
        DB::table('categories')->insert([
            'category_name' => 'TV',
            'company_id' =>2
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Laptop',
            'company_id' =>1
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Headphone',
            'company_id' =>1
        ]);
        DB::table('categories')->insert([
            'category_name' => 'TV',
            'company_id' =>1
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Headphone',
            'company_id' =>4
        ]);
        DB::table('categories')->insert([
            'category_name' => 'TV',
            'company_id' =>4
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Computer',
            'company_id' =>4
        ]);  DB::table('categories')->insert([
            'category_name' => 'Computer',
            'company_id' =>3
        ]);  DB::table('categories')->insert([
            'category_name' => 'Computer',
            'company_id' =>2
        ]);  DB::table('categories')->insert([
            'category_name' => 'Computer',
            'company_id' =>1
        ]);
    }
}
