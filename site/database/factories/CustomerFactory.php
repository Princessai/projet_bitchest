<?php

namespace Database\Factories;

use App\Models\Wallet;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
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
        $wallet = Wallet::create();
        $wallet = $wallet->id;
        var_dump($wallet);
        return [
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'age' => fake()->numberBetween(18,35),
            'email' => fake()->email(),
            'password' =>  Hash::make('azerty12'),
            'wallet_id' => $wallet,
        ];
    }
}
