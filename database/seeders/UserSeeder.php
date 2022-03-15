<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Dina Reda',
            'email' => 'engdondon92@gmail.com',
            'isAdmin' =>1,
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'User1',
            'email' => Str::random(10).'@gmail.com',
            'isAdmin' =>0,
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'User2',
            'email' => Str::random(10).'@gmail.com',
            'isAdmin' =>0,
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'User3',
            'email' => Str::random(10).'@gmail.com',
            'isAdmin' =>0,
            'password' => Hash::make('password'),
        ]);
    }
}
