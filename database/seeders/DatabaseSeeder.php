<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ProdukSeeder::class);
        $this->call(SewaSeeder::class);
    }
}
