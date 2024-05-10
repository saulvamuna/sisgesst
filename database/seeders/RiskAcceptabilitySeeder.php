<?php

namespace Database\Seeders;

use App\Models\RiskAcceptability;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiskAcceptabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RiskAcceptability::create([
            'id' => 1,
            'name' => 'I',
            'meaning' => 'No aceptable.',
            'color' => '#FE0000'
        ]);

        RiskAcceptability::create([
            'id' => 2,
            'name' => 'II',
            'meaning' => 'No aceptable o aceptable con control específico.',
            'color' => '#FD8D14'
        ]);

        RiskAcceptability::create([
            'id' => 3,
            'name' => 'III',
            'meaning' => 'Aceptable.',
            'color' => '#F8DE22'
        ]);

        RiskAcceptability::create([
            'id' => 4,
            'name' => 'IV',
            'meaning' => 'Aceptable.',
            'color' => '#539165'
        ]);
    }
}
