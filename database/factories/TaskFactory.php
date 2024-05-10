<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'routine' => $this->faker->randomElement([1, 0]),
            'status' => 'sin evaluar',
            'activity_id' => function () {
                return \App\Models\Activity::take(20)->get()->random()->id;
            },
        ];
    }
}
