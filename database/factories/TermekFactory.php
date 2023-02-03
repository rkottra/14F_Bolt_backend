<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class TermekFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nev" => $this->faker->sentence,
            "leiras" => $this->faker->text,
            "kepurl" => $this->faker->imageUrl($width = 640, $height = 480, 'cats', true),
            "ar" => rand(100, 1000),
            "kedvezmeny" => (rand(0,100) > 80 ? 0.2 : 0)
        ];
    }
}
