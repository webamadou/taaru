<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Country::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "iso" => $this->faker->name,
            "name" => $this->faker->name,
            "nicename" => $this->faker->name,
            "iso3" => $this->faker->name,
            "numcode" => $this->faker->name,
            "phonecode" => "001",
        ];
    }
}
