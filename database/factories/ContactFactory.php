<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->randomElement(['3223655167', '3555549419','3265126984', '3245548598']),
            'email' => $this->faker->safeEmail(),
            'message' => $this->faker->paragraph(),
        ];
    }
}
