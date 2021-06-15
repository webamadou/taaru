<?php

namespace Database\Factories;

use App\Models\Institute;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstituteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Institute::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = \App\Models\User::inRandomOrder()->select('id')->first();
        $city = \App\Models\City::inRandomOrder()->select('id')->first();

        return [
            "name" => $this->faker->sentence( 3 ),
            "institute_type" => 1,
            "slogan" => $this->faker->sentence( 1 ),
            "presentation" => $this->faker->paragraph( 3 ),
            "email" => $this->faker->email ,
            "telephone1" => $this->faker->phoneNumber() ,
            "since" => $this->faker->date('Y-m-d'),
            "address" => $this->faker->sentence( 3 ),
            "user_id" => $user->id,
            "city_id" => $city->id,
            "images" => "http://lorempixel.com/640/480/",
            "work_days" => "1::09x19;2::09x19;3::09x19;4::09x19;5::09x19;6::09x19;7::09x19;",
            "saved_by" => 1,
        ];
    }
}
