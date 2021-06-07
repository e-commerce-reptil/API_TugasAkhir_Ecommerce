<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Hewan',
            'image_link' => 'ssss'
        ]);

        DB::table('categories')->insert([
            'name' => 'Makanan',
            'image_link' => 'ssss2'
        ]);

        DB::table('categories')->insert([
            'name' => 'Aksesoris',
            'image_link' => 'ssss3'
        ]);
    }
}
