<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Company::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nit' => $this->faker->unique()->postcode,
            'name' => "{$this->faker->company} Group",
            'email' => $this->faker->unique()->safeEmail(),
            'number_direct_workers' => $this->faker->randomDigit,
            'number_indirect_workers' => $this->faker->randomDigit,
            'made_by' => $this->faker->sentence($nbWords = 6, $variableNbWords = true) ,
            'position' => $this->faker->jobTitle,
            'city_id' => function () {
                return \App\Models\City::take(10)->get()->random()->id;
            },
            'economic_sector' => $this->faker->sentence($nbWords = 6, $variableNbWords = true)
        ];
    }
}
