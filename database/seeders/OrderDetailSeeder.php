<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_details')->insert([
            [
                'order_id' => 1, // Sesuaikan dengan ID pesanan yang ada
                'product_id' => 1, // Sesuaikan dengan ID produk yang ada
                'quantity' => 2,
            ],
            [
                'order_id' => 1,
                'product_id' => 2,
                'quantity' => 1,
            ],
            // Tambahkan data lain jika diperlukan
        ]);
    }
}
