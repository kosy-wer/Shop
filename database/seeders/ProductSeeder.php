<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     DB::table('products')->insert([
        [
            'name' => 'Product A',
            'description' => 'Deskripsi produk A',
            'price' => 50.00,
            'image' => 'product_a.jpg',
            'stock' => 100,
        ],
        [
            'name' => 'Product B',
            'description' => 'Deskripsi produk B',
            'price' => 75.00,
            'image' => 'product_b.jpg',
            'stock' => 80,
        ],
        [
            'name' => 'Product C',
            'description' => 'Deskripsi produk C',
            'price' => 30.00,
            'image' => 'product_c.jpg',
            'stock' => 120,
        ],
        // Tambahkan data lainnya sesuai kebutuhan
    ]);
    }
}
