<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PaymentTotal extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        foreach (range(1,5) as $value) {
            # code...
            DB::table('payment_total')->insert([
                'paymentTotal' => $faker->randomDigit(),
            ]);
        }
    }
}
