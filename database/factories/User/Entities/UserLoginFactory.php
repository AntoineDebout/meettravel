<?php

namespace Database\Factories\User\Entities;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserLogin>
 */
class UserLoginFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ip'                    => $this->faker->ipv4,
            'browser'               => $this->faker->randomElement(['Chrome', 'Firefox', 'Opera', 'Safari']),
            'browser_version'       => $this->faker->numberBetween(1,100),
            'device_type'           => $this->faker->randomElement(['desktop', 'mobile', 'tablet']),
            'platform'              => $this->faker->randomElement(['Windows', 'OS X', 'Linux']),
            'user_id'               => User::factory()->create()->id,
        ];
    }
}
