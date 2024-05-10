<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Emanuel',
            'email' => 'ema@ema.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'),
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => 2,
            'profile_photo_path' => null,
            'current_team_id' => null,
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Saulv Amuna',
            'email' => 'amuna@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => 1,
            'profile_photo_path' => null,
            'current_team_id' => null,
        ])->assignRole('Administrador');


        User::factory(100)->create()->each(function ($user) {
            $user->assignRole('Evaluador');
        });
    }
}
