<?php

namespace Database\Seeders;

use App\Models\DeficiencyLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeficiencyLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeficiencyLevel::create([
            'id' => 1,
            'prefix' => 'MA',
            'name' => 'Muy Alto',
            'value' => '10',
            'meaning' => 'Se ha(n) detectado peligro(s) que determina(n) como posible la generación de incidentes o consecuencias muy significativas, o la eficacia del conjunto de medidas preventivas existentes respecto al riesgo es nula o no existe, o ambas.',
            'color' => '#FE0000'
        ]);

        DeficiencyLevel::create([
            'id' => 2,
            'prefix' => 'A',
            'name' => 'Alto',
            'value' => '6',
            'meaning' => 'Se ha(n) detectada algún(os) peligro(s) que pueden dar lugar a consecuencias significativa(s), o la eficacia del conjunto de medidas preventivas existentes es baja, o ambas.',
            'color' => '#FD8D14'
        ]);

        DeficiencyLevel::create([
            'id' => 3,
            'prefix' => 'M',
            'name' => 'Medio',
            'value' => '2',
            'meaning' => 'Se han detectado peligros que pueden dar lugar a consecuencias poco significativas o de menor importancia, o la eficacia del conjunto de medidas preventivas existentes es moderada, o ambas.',
            'color' => '#F8DE22'
        ]);

        DeficiencyLevel::create([
            'id' => 4,
            'prefix' => 'B',
            'name' => 'Bajo',
            'value' => '0',
            'meaning' => 'No se ha detectado consecuencia alguna, o la eficacia del conjunto de medidas preventivas existentes es alta, o ambas. El riesgo está controlado.',
            'color' => '#539165'
        ]);
    }
}
