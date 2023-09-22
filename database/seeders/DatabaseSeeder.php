<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            ProvinceSeeder::class,
            RegencySeeder::class,
            DistrictSeeder::class,
            SubDistrict1Seeder::class,
            SubDistrict2Seeder::class,
            SubDistrict3Seeder::class,
            SubDistrict4Seeder::class,
            SubDistrict5Seeder::class,
            SubDistrict6Seeder::class,
            SubDistrict7Seeder::class,
            SubDistrict8Seeder::class,
            SubDistrict9Seeder::class,
            SubDistrict10Seeder::class,
            SubDistrict11Seeder::class,
            SubDistrict12Seeder::class,
            // SubDistrictSeeder::class,
        ]);

    }
}
