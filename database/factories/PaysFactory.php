<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaysFactory extends Factory
{




    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'libelePays' => $this->faker->country(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
