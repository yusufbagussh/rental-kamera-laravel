<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_sewa')->insert([
            'sewa_user' => '2',
            'sewa_produk' => '1',
            'sewa_pembayaran' => 'Via Cash',
            'sewa_pengiriman' => 'Ambil Sendiri',
            'sewa_mulai' => Carbon::now(),
            'sewa_lama' => 2,
            'sewa_total' => 200000
        ]);
    }
}
