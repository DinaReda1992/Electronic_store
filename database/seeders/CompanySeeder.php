<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'company_name' => 'ASUS',
        ]);
        DB::table('companies')->insert([
            'company_name' => 'Dell',
        ]);
        DB::table('companies')->insert([
            'company_name' => 'SamSung',
        ]);
        DB::table('companies')->insert([
            'company_name' => 'Apple',
        ]);
        DB::table('companies')->insert([
            'company_name' => 'LG',
        ]);
        DB::table('companies')->insert([
            'company_name' => 'HP',
        ]);
        DB::table('companies')->insert([
            'company_name' => 'Huawei',
        ]);
    }
}
