<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InstituteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Institute::factory()->count(12)->create();
    }
}
