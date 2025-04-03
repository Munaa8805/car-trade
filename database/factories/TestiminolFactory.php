<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testiminol>
 */
class TestiminolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'comment' => $this->faker->text(200),
            'image' => $this->faker->imageUrl(640, 480, 'peoples', true),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
