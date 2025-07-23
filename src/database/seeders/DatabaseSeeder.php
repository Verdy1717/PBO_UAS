<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Menjalankan seeder untuk user dan role (auth & permission)
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            KameraSeeder::class,
            LensaSeeder::class,
            DroneSeeder::class,
            PelangganSeeder::class,
            TransaksiSewaSeeder::class,
        ]);
    }
}
