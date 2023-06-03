<?php

namespace Database\Factories;

use App\Models\Delivery;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Delivery::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => 'ongoing',
            'receipt_id' => \App\Models\Receipt::factory(),
            'meetup_point_id' => \App\Models\MeetupPoint::factory(),
        ];
    }
}
