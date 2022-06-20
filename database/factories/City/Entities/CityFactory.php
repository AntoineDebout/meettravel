<?php

namespace Database\Factories\City\Entities;

use App\Models\Country\Entities\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => $this->faker->postcode,
            'name' => $this->faker->city,
            'country_id' => Country::factory()->create()->id,
        ];
    }
}
