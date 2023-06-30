<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'matric_no' => $this->faker->bothify('??#####'),
            'employment_type' => 'part_time',
            'day' => 'Tuesday',
            'time' => '10.00-12.00',
        ];
    }
}
