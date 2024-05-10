<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\Province;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::create([
            'id'     => 1,
            'name' => 'Amazonas',
        ]);

        Province::create([
            'id'     => 2,
            'name' => 'Antioquia',
        ]);

        Province::create([
            'id'     => 3,
            'name' => 'Arauca',
        ]);

        Province::create([
            'id'     => 4,
            'name' => 'Atlántico',
        ]);

        Province::create([
            'id'     => 5,
            'name' => 'Bolívar',
        ]);

        Province::create([
            'id'     => 6,
            'name' => 'Boyacá',
        ]);

        Province::create([
            'id'     => 7,
            'name' => 'Caldas',
        ]);

        Province::create([
            'id'     => 8,
            'name' => 'Caquetá',
        ]);

        Province::create([
            'id'     => 9,
            'name' => 'Casanare',
        ]);

        Province::create([
            'id'     => 10,
            'name' => 'Cauca',
        ]);

        Province::create([
            'id'     => 11,
            'name' => 'Cesar',
        ]);

        Province::create([
            'id'     => 12,
            'name' => 'Chocó',
        ]);

        Province::create([
            'id'     => 13,
            'name' => 'Córdoba',
        ]);

        Province::create([
            'id'     => 14,
            'name' => 'Cundinamarca',
        ]);

        Province::create([
            'id'     => 15,
            'name' => 'Güainia',
        ]);

        Province::create([
            'id'     => 16,
            'name' => 'Guaviare',
        ]);

        Province::create([
            'id'     => 17,
            'name' => 'Huila',
        ]);

        Province::create([
            'id'     => 18,
            'name' => 'La Guajira',
        ]);

        Province::create([
            'id'     => 19,
            'name' => 'Magdalena',
        ]);

        Province::create([
            'id'     => 20,
            'name' => 'Meta',
        ]);

        Province::create([
            'id'     => 21,
            'name' => 'Nariño',
        ]);

        Province::create([
            'id'     => 22,
            'name' => 'Norte de Santander',
        ]);

        Province::create([
            'id'     => 23,
            'name' => 'Putumayo',
        ]);

        Province::create([
            'id'     => 24,
            'name' => 'Quindio',
        ]);

        Province::create([
            'id'     => 25,
            'name' => 'Risaralda',
        ]);

        Province::create([
            'id'     => 26,
            'name' => 'San Andrés y Providencia',
        ]);

        Province::create([
            'id'     => 27,
            'name' => 'Santander',
        ]);

        Province::create([
            'id'     => 28,
            'name' => 'Sucre',
        ]);

        Province::create([
            'id'     => 29,
            'name' => 'Tolima',
        ]);

        Province::create([
            'id'     => 30,
            'name' => 'Valle del Cauca',
        ]);

        Province::create([
            'id'     => 31,
            'name' => 'Vaupés',
        ]);

        Province::create([
            'id'     => 32,
            'name' => 'Vichada',
        ]);

        Province::create([
            'id'     => 33,
            'name' => 'Extranjero',
        ]);
    }
}
