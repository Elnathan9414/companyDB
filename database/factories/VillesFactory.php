<?php

namespace Database\Factories;

use App\Models\pays;
use Illuminate\Database\Eloquent\Factories\Factory;

class VillesFactory extends Factory
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
            'libeleVille' => $this->faker->city(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
