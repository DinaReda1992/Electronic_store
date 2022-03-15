<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('sub_categories')->insert([
                'sub_category_name' => 'Airpods',
                'category_id' =>4
            ]);
            DB::table('sub_categories')->insert([
                'sub_category_name' => 'CPU',
                'category_id' =>4
            ]);
            DB::table('sub_categories')->insert([
                'sub_category_name' => 'CPU',
                'category_id' =>2
            ]);
    }
}
