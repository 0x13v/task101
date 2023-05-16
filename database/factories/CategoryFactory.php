<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $parentIds = [null] + range(1, 10);

        return [
            'name' => $this->faker->word,
            'parent_id' => $this->faker->randomElement($parentIds),
        ];
    }
}
