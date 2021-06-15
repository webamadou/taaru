<?php

namespace Database\Factories;

use App\Models\Care;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CareFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Care::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $caretype = \App\Models\CareType::inRandomOrder()->select('id')->first();
        $institute = \App\Models\Institute::inRandomOrder()->select('id')->first();

        return [
            "name" => $this->faker->sentence(3, true),
            "ref" => Str::random(12),
            "description" => $this->faker->paragraph(3, true),
            "care_type_id" => $caretype->id,
            "institute_id" => $institute->id,
            "price" => $this->faker->randomNumber(5),
            "images" => $this->faker->imageUrl,
            "views" => $this->faker->randomNumber(3),
            "saved_by" => 1,
        ];
    }
}
