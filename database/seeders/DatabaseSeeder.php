<?php

namespace Database\Seeders;


use App\Models\Commune;
use App\Models\entreprise;
use App\Models\pays;
use App\Models\Secteur;
use App\Models\villes;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         //entreprise::factory(30)->create();
        // pays::factory(30)->create();
      //  \App\Models\pays::factory(30)->create();
      // $pays = pays::factory(50)->create();
      //  $entreprise = entreprise::factory(50)->create();
        $villes = villes::factory(50)->create();
       $commune =Commune::factory(50)->create();
        $secteur = Secteur::factory(50)->create();

    }
}
