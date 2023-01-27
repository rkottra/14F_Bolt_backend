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
            "nev" => Str::random(10),
            "kepurl" => Str::random(40),
            "ar" => rand(100, 1000),
            "kedvezmeny" => (rand(0,100)>80?0.2:0)
        ];
    }
}
