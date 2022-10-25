<?php

namespace Database\Seeders;

use App\Models\Encuesta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EncuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Encuesta::create([
            'nombre' => 'Comercio electrónico en tiempos de cuarentena inteligente a causa del covid 19'

        ]);
    }
}
