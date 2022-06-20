<?php

namespace Database\Factories\User\Entities;

use App\Models\User\Entities\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserPrivacy>
 */
class UserPrivacyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name'        => $this->faker->firstName,
            'last_name'         => $this->faker->lastName,
            'username'          => $this->faker->userName,
            'gender'            => $this->faker->randomElement(['M', 'F']),
            'birthday'          => $this->faker->dateTimeBetween('-50 years', '-18 years'),
            'phone_number'      => $this->faker->phoneNumber,
            'user_id'           => User::factory()->create()->id,
        ];
    }
}
