<?php

namespace Database\Seeders;

use Database\Factories\MahasiswaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            UserSeeder::class,
            RoleAndPermissionSeeder::class,
            MenuGroupSeeder::class,
            MenuItemSeeder::class,
            SosialSeeder::class,
            PendudukSeeder::class,
            OrganisasiSeeder::class,
            AgendaSeeder::class,
            PotensiSeeder::class,
            GaleriSeeder::class,
        ]);
    }
}
