<?php

namespace Database\Factories\User\Entities;

use App\Models\User\Entities\UserRole;
use App\Models\User\Entities\UserStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class UserRoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => UserRole::USER,
            'name' => trans('code-list/user_role.' . UserRole::USER),
        ];
    }
}
