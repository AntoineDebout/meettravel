<?php

namespace Database\Factories\User\Entities;

use App\Models\User\Entities\UserStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class UserStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => UserStatus::ACTIVE,
            'name' => trans('code-list/user_status.' . UserStatus::ACTIVE),
        ];
    }
}
