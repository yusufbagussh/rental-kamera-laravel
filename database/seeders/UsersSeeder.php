<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_users')->insert([
            'user_role' => '1',
            'user_nama' => 'Yusuf Bagus Sungging Herlambang',
            'user_email' => 'yusuf.herlambang@gmail.com',
            'user_password' => bcrypt('yusuf57552'),
            'user_tempat_lahir' => 'Surakarta',
            'user_tgl_lahir' => Carbon::now(),
            'user_alamat' => 'Sukoharjo',
            'user_gender' => 'Laki - laki',
            'user_gambar' => 'yusuf.png'
        ]);
        DB::table('tb_users')->insert([
            'user_role' => '2',
            'user_nama' => 'Dhimas Risang Maulana',
            'user_email' => 'dhimas@gmail.com',
            'user_password' => bcrypt('dhimas57552'),
            'user_tempat_lahir' => 'Surakarta',
            'user_tgl_lahir' => Carbon::now()->format('Y-m-d H:i:s'),
            'user_alamat' => 'Sukoharjo',
            'user_gender' => 'Laki - laki',
            'user_gambar' => 'yusuf.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
