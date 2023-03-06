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
            'Wattpad'        =>  'Wattpad 1',
            'Novel'          =>  'Novel 1',
            'Bookmark'       =>  'Bookmark 1'   
            
        ]);

        DB::table('tbl_books')->insert([
            'Wattpad'        =>  'Wattpad 2',
            'Novel'          =>  'Novel 2',
            'Bookmark'       =>  'Bookmark 2'   
            
        ]);

        DB::table('tbl_books')->insert([
            'Wattpad'        =>  'Wattpad 3',
            'Novel'          =>  'Novel 3',
            'Bookmark'       =>  'Bookmark 3'   
            
        ]);
    }
}
