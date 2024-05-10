<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([RoleSeeder::class, UserSeeder::class, ]);

        $this->call([
            ProvinceSeeder::class,
            CitySeeder::class,
            CompanySeeder::class,
            ProcessSeeder::class,
            ActivitySeeder::class,
            TaskSeeder::class,

            DangerDescriptionSeeder::class,
            DeficiencyLevelSeeder::class,
            ExposureLevelSeeder::class,
            ProbabilityLevelSeeder::class,
            ConsequenceLevelSeeder::class,
            InterventionRiskLevelSeeder::class,
            RiskAcceptabilitySeeder::class,
            InterventionMeasureSeeder::class,
        ]);
    }
}
