<?php

namespace Database\Factories;

use App\Models\CashFlow;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CashFlowFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CashFlow::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'opening_cash' => $this->faker->randomNumber(2),
            'closing_cash' => $this->faker->randomNumber(2),
            'shift_id' => \App\Models\Shift::factory(),
        ];
    }
}
