<?php

namespace Database\Seeders;

use App\Models\InterventionRiskLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InterventionRiskLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InterventionRiskLevel::create([
            'id' => 1,
            'name' => 'I',
            'value' => '4000-600',
            'meaning' => 'Situación crítica. Suspender actividades hasta que el riesgo esté bajo control. Intervención urgente',
            'color' => '#FE0000'
        ]);

        InterventionRiskLevel::create([
            'id' => 2,
            'name' => 'II',
            'value' => '500-150',
            'meaning' => 'Corregir y adoptar medidas de control de inmediato. Sin embargo, suspenda actividades si el nivel de riesgo está por encima o igual de 360.',
            'color' => '#FD8D14'
        ]);

        InterventionRiskLevel::create([
            'id' => 3,
            'name' => 'III',
            'value' => '120-40',
            'meaning' => 'Mejorar si es posible. Sería conveniente justificar la intervención y su rentabilidad.',
            'color' => '#F8DE22'
        ]);

        InterventionRiskLevel::create([
            'id' => 4,
            'name' => 'IV',
            'value' => '20-0',
            'meaning' => 'Situación deficiente con exposición continua o muy deficiente con exposición frecuente. Normalmente la materialización del riesgo ocurre con frecuencia.',
            'color' => '#539165'
        ]);
    }
}
