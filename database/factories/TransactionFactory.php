<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'transaction_identifier' => Str::random(),
            'transaction_name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'contact_number' => $this->faker->phoneNumber(),
            'date' => $this->faker->date(),
            'payment_method' => $this->faker->numberBetween(0, 1),
            'delivery_status' => $this->faker->numberBetween(0, 1)
        ];
    }
}
