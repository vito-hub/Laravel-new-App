<?php

namespace Database\Factories\Task;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->text(25),
            'completed' => $this->faker->boolean(),
            'user_id' => $this->faker->numberBetween(1, 10),
            'created_by' => $this->faker->numberBetween(1, 10),
        ];
    }
}
