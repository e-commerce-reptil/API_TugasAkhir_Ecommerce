<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama_product'=> 'Tokek ekor 2',
            'tgl_lahir' => '17-01-2020',
            'line' => 'albino',
            'parent' => 'joko',
            'note' => 'minus gabisa lari',
            'harga_product' => 10000,
            'desc_product' => 'Kopi Sehat',
            'pic_product' => 'This Picture',
            'category_id' => 1
        ]);
    }
}
