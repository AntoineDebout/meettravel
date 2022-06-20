<?php

namespace Database\Factories\User\Entities;

use App\Models\User\Entities\UserRole;
use App\Models\User\Entities\UserStatus;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use function now;

/**
 * @extends Factory
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'              => $this->faker->name(),
            'email'             => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password'          => $this->faker->password,
            'remember_token'    => Str::random(10),
            'user_status_code'  => $this->faker->randomElement([UserStatus::ACTIVE, UserStatus::INACTIVE]),
            'user_role_code'    => $this->faker->randomElement([UserRole::ADMIN, UserRole::USER]),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
