<?php

namespace Database\Seeders;

use App\Models\ProbabilityLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProbabilityLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProbabilityLevel::create([
            'id' => 1,
            'prefix' => 'MA',
            'name' => 'Muy Alto',
            'value' => '40-24',
            'meaning' => 'Situación deficiente con exposición continua o muy deficiente con exposición frecuente. Normalmente la materialización del riesgo ocurre con frecuencia.',
            'color' => '#FE0000'
        ]);

        ProbabilityLevel::create([
            'id' => 2,
            'prefix' => 'A',
            'name' => 'Alto',
            'value' => '20-10',
            'meaning' => 'situación deficiente con exposición frecuente u ocasioanal, o bien situación muy deficiente con exposición ocasional o esporádica. La materialización del riesgo es posible que suceda varias veces en la vida laboral.',
            'color' => '#FD8D14'
        ]);

        ProbabilityLevel::create([
            'id' => 3,
            'prefix' => 'M',
            'name' => 'Medio',
            'value' => '8-6',
            'meaning' => 'Situación deficiente con exposición esporádica o bien situación mejorada con exposición continuada o frecuente. Es posible que suceda el daño alguna vez.',
            'color' => '#F8DE22'
        ]);

        ProbabilityLevel::create([
            'id' => 4,
            'prefix' => 'B',
            'name' => 'Bajo',
            'value' => '4-2',
            'meaning' => 'Situación mejorable con exposición ocasional o esporádica, o situación sin anomalía destacable con cualquier nivel de exposición. No es esperable que se materialice el riesgo, aunque puede ser concebible.',
            'color' => '#539165'
        ]);
    }
}
