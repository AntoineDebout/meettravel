<?php

namespace Database\Factories\Activity\Entities;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'starts_at' => $this->faker->dateTimeBetween('-4 weeks', '-3 weeks'),
            'ends_at'  => $this->faker->dateTimeBetween('-2 weeks', '-1 weeks'),
            'unit_price' => $this->faker->randomDigitNotZero(),
            'seats' => $this->faker->numberBetween(1,10),
        ];
    }
}
