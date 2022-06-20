<?php

namespace Database\Factories\Booking\Entities;

use App\Models\Activity\Entities\Activity;
use App\Models\User\Entities\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'activity_id' => Activity::factory()->create()->id,
            'seats'     => $this->faker->numberBetween(1,10),
        ];
    }
}
