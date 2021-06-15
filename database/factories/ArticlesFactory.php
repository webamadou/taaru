<?php

namespace Database\Factories;

use App\Models\Articles;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticlesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Articles::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title"     => $this->faker->sentence(2),
            "content"   => $this->faker->paragraph(3),
            "user_id"   => \App\Models\User::all()->random()->first()->id
        ];
    }
}
