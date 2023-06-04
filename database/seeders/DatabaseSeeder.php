<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@admin.com',
                'password' => \Hash::make('admin'),
            ]);

        $this->call(CashFlowSeeder::class);
        $this->call(DeliverySeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(InventorySeeder::class);
        $this->call(MeetupPointSeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ReceiptSeeder::class);
        $this->call(SaleSeeder::class);
        $this->call(ShiftSeeder::class);
        $this->call(UserSeeder::class);
    }
}
