<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Care::factory()->count(36)->create();
    }
}
