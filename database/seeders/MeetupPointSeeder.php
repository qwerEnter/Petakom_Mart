<?php

namespace Database\Seeders;

use App\Models\MeetupPoint;
use Illuminate\Database\Seeder;

class MeetupPointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MeetupPoint::factory()
            ->count(5)
            ->create();
    }
}
