<?php

namespace Database\Seeders;

use App\Models\ExposureLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExposureLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExposureLevel::create([
            'id' => 1,
            'prefix' => 'EC',
            'name' => 'Continuo',
            'value' => '4',
            'meaning' => 'La situación de exposición se presenta sin interrupción o varias veces con tiempo prolongado durante la jornada laboral.',
            'color' => '#FE0000'
        ]);
        ExposureLevel::create([
            'id' => 2,
            'prefix' => 'EF',
            'name' => 'Frecuente',
            'value' => '3',
            'meaning' => 'La situación de exposición se presenta varias veces durante la jornada laboral por tiempos cortos.',
            'color' => '#FD8D14'
        ]);
        ExposureLevel::create([
            'id' => 3,
            'prefix' => 'EO',
            'name' => 'Ocasional',
            'value' => '2',
            'meaning' => 'La situación de exposición se presenta alguna vez durante la jornada laboral y por un período de tiempo corto.',
            'color' => '#F8DE22'
        ]);
        ExposureLevel::create([
            'id' => 4,
            'prefix' => 'EE',
            'name' => 'Esporadica',
            'value' => '1',
            'meaning' => 'La situación de exposición se presenta de manera eventual.',
            'color' => '#539165'
        ]);
    }
}
