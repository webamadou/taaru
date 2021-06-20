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

        $image_keywords = ['beauty salon', 'makeup','spa','massage face','make up','hair salon','hair cut'];
        $random_key = array_rand($image_keywords,2);
        $unsplashe_img_source = "https://source.unsplash.com/featured/?".$image_keywords[$random_key[rand(0,1)]].",".$image_keywords[$random_key[rand(0,1)]];

        return [
            "name" => $this->faker->sentence(3, true),
            "ref" => Str::random(12),
            "description" => $this->faker->paragraph(3, true),
            "care_type_id" => $caretype->id,
            "institute_id" => $institute->id,
            "price" => $this->faker->randomNumber(5),
            "images" => $unsplashe_img_source,
            "highlighted" => rand(0,1),
            "views" => $this->faker->randomNumber(3),
            "saved_by" => 1,
        ];
    }
}
