<?php

namespace Database\Factories;

use App\Models\Delivery;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Delivery>
 */
class DeliveryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'driver_name' => $this->faker->name(),
            'truck_number' => $this->faker->randomDigit(),
            'status' => Delivery::$DELIVERY_STATUS_IDLE,
            'transaction_id' => Transaction::inRandomOrder()->value('id'),
        ];
    }
}
