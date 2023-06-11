<?php

namespace Database\Factories;

use App\Models\Inventory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inventory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'expired_date' => $this->faker->date(),
            'quantity' => $this->faker->numberBetween(0, 100),
            'product_id' => \App\Models\Product::factory(),
        ];
    }
}
