<?php

namespace Database\Seeders;

use App\Models\CashFlow;
use Illuminate\Database\Seeder;

class CashFlowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CashFlow::factory()
            ->count(5)
            ->create();
    }
}
