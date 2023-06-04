<?php

namespace Database\Factories;

use App\Models\Sale;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sale::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'quantity' => $this->faker->randomNumber(),
            'total' => $this->faker->randomFloat(2, 0, 9999),
            'product_id' => \App\Models\Product::factory(),
            'payment_method_id' => \App\Models\PaymentMethod::factory(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
