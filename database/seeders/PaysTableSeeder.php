<?php

namespace Database\Seeders;

use App\Models\pays;
use Illuminate\Database\Seeder;

class PaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pays::all();
    }
}
