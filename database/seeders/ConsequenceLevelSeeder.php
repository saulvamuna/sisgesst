<?php

namespace Database\Seeders;

use App\Models\ConsequenceLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsequenceLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ConsequenceLevel::create([
            'id' => 1,
            'prefix' => 'M',
            'name' => 'Mortal o catastrofico',
            'value' => '100',
            'meaning' => 'Muerte(s)',
            'color' => '#FE0000'
        ]);

        ConsequenceLevel::create([
            'id' => 2,
            'prefix' => 'MG',
            'name' => 'Muy grave',
            'value' => '60',
            'meaning' => 'Lesiones o enfermedades graves irreparables (incapacidad permanente parcial o invalidez)',
            'color' => '#FD8D14'
        ]);

        ConsequenceLevel::create([
            'id' => 3,
            'prefix' => 'G',
            'name' => 'Grave',
            'value' => '25',
            'meaning' => 'Lesiones o enfermedades con incapacidad laboral temporal (ILT)',
            'color' => '#F8DE22'
        ]);

        ConsequenceLevel::create([
            'id' => 4,
            'prefix' => 'L',
            'name' => 'Leve',
            'value' => '10',
            'meaning' => 'Lesiones o enfermedades que no requieren incapacidad',
            'color' => '#539165'
        ]);
    }
}
