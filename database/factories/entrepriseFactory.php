<?php

namespace Database\Factories;

use App\Models\Commune;
use App\Models\pays;
use App\Models\Secteur;
use App\Models\villes;
use Illuminate\Database\Eloquent\Factories\Factory;

class entrepriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->numberBetween(5,40),
            'nomEntreprise' => $this->faker->name(),
            'sigle' => $this->faker->unique()->name(),
            'quartier' => $this->faker->city(),
            'lieuDit' => $this->faker->city(),
            'adresse' => $this->faker->address(),
            'telephoneEntreprise' => $this->faker->phoneNumber(),
            'emailEntreprise' => $this->faker->email(),
            'tailleEntreprise' => $this->faker->name(),
            'nomResponsable' => $this->faker->firstName(),
            'tireResponsable' => $this->faker->name(),
            'contactResponsable' => $this->faker->phoneNumber(),
            'emailresponsable' => $this->faker->email(),
            'siteWeb' => $this->faker->name(),
            'facebook' => $this->faker->name(),
            'instagram' => $this->faker->name(),
            'linkedin' => $this->faker->name(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),

            'pays_id' => pays::factory(),
            'ville_id' => villes::factory(),
            'commune_id' => Commune::factory(),
            'secteur_id' => Secteur::factory(),
            
        ];
    }
}
