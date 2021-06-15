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
        \App\Models\User::factory(10)->create();
        $this->call(CountrySeeder::class);
        $this->call(CitySeeder::class);
        $this->call(CareTypesSeeder::class);
        $this->call(InstituteSeeder::class);
        $this->call(CareSeeder::class);
    }
}
