<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=>$this->faker->name(),
            "email"=>$this->faker->unique()->safeEmail(),
            "username"=>$this->faker->unique()->userName(),
            "mobile_no"=>$this->faker->phoneNumber(),
            "password"=>Hash::make('Password'),
        ];
    }
}
