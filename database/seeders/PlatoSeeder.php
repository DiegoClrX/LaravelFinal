<?php

namespace Database\Seeders;

use App\Models\Plato;
use Illuminate\Database\Seeder;

class PlatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plato::factory()
        ->count(50)
        ->create();
    }
}
