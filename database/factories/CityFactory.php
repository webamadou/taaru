<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * 14.732625099139465, -17.492979983039678
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->city,
            "latitude" => $this->faker->latitude(14, 15),
            "longitude" => $this->faker->latitude(-18, -17),
            "zipcode" => 24095,
            "annexes" => $this->faker->sentence(2),
            "country_id" => $this->faker->sentence(2),
        ];
    }
}
