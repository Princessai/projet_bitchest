<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Wallet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $wallet = Wallet::create(['solde'=>0]);
        $wallet = $wallet->id;
        var_dump($wallet);
        return [
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'age' => fake()->numberBetween(18,35),
            'email' => fake()->email(),
            'password' => fake()->password(),
            'wallet_id' => $wallet,
        ];
    }
}
