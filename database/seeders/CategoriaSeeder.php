<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => "ensalada",
        ]);
        DB::table('categorias')->insert([
            'nombre' => "carne",
        ]);
        DB::table('categorias')->insert([
            'nombre' => "pizza",
        ]);
        DB::table('categorias')->insert([
            'nombre' => "pescado",
        ]);
        DB::table('categorias')->insert([
            'nombre' => "postre",
        ]);
    }
}
