<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_kategori')->insert([
            'kategori_nama' => 'kamera',
        ]);
        DB::table('tb_kategori')->insert([
            'kategori_nama' => 'hdcam',
        ]);
        DB::table('tb_kategori')->insert([
            'kategori_nama' => 'aksesoris',
        ]);
    }
}
