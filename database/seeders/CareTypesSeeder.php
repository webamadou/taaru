<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CareTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CareType::factory()->count(8)->create();
    }
}
