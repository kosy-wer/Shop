<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'shipping_address' => 'Alamat John Doe',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'shipping_address' => 'Alamat Jane Smith',
            ],
            // Tambahkan data lain jika diperlukan
        ]);
    }
}
