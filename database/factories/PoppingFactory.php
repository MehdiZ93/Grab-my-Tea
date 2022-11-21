<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Popping>
 */
class PoppingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(),
            'image'=>$this->faker->imageUrl(),
            'price'=>rand(100, 200),
            'available'=>$this->faker->boolean(90)
        ];
    }
}
