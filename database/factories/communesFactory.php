<?php

namespace Database\Factories;

use App\Models\pays;
use App\Models\villes;
use Illuminate\Database\Eloquent\Factories\Factory;

class communesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pays_id' => pays::factory(),
            'ville_id' => villes::factory(),
            'libelleCommune' => $this->faker->city(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
