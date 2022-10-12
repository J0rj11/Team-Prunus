<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'expense_account' => $this->faker->name(),
            'expense_date' => now(),
            'amount' => $this->faker->numberBetween(100, 1000),
            'notes' => $this->faker->sentence(),
        ];
    }
}
