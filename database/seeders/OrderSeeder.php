<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'order_number' => 'ORD001',
                'order_date' => now(),
                'total_price' => 150.00,
                'status' => 'pending',
            ],
            [
                'order_number' => 'ORD002',
                'order_date' => now(),
                'total_price' => 125.00,
                'status' => 'pending',
            ],
            // Tambahkan data lain jika diperlukan
        ]);
    }
}
