<?php

namespace Database\Factories;

use App\Models\CareType;
use Illuminate\Database\Eloquent\Factories\Factory;

class CareTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CareType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->word(),
            "description" => $this->faker->paragraph(3,true),
            "institute_type" => 1,
            "parent_id" => null,
            "image_url" => null,
            "show_menu" => 1,
        ];
    }
}
