<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_role')->insert([
            'role_nama' => 'admin',
        ]);
        DB::table('tb_role')->insert([
            'role_nama' => 'member',
        ]);
    }
}
