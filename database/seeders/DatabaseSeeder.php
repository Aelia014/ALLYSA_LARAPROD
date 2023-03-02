<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
USE Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
    
         \App\Models\User::factory(5)->create();

        DB::table('tbl_books')->insert([
            'Wattpad'        =>  'I love you since 1892',
            'Novel'          =>  'Percy Jackson set',
            'Bookmark'       =>  'vintage set'   
            
        ]);

        DB::table('tbl_books')->insert([
            'Wattpad'        =>  'Every Beast needs a Beauty',
            'Novel'          =>  'Chronicles of Narnia set',
            'Bookmark'       =>  'Aesthetic set'   
            
        ]);

        DB::table('tbl_books')->insert([
            'Wattpad'        =>  'Scorching Love',
            'Novel'          =>  'Lord of the rings set',
            'Bookmark'       =>  'Colorful set'   
            
        ]);
    }
}
