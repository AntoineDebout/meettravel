<?php

namespace Database\Factories\Category\Entities;

use App\Models\Category\Entities\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => Category::SPORT,
            'name' => $this->faker->name,
        ];
    }
}
