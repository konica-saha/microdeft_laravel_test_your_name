<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('departments')->insert([
            'Business and Corporate' => Str::random(10),
            'Constitutional ' => Str::random(10),
            'Customs ' => Str::random(10),
            ' VAT and Income Tax' => Str::random(10),
            'Crime' => Str::random(10),
            
        ]);
    }
}
