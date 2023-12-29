<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Category 1',
                'description' => 'Deskripsi kategori 1',
            ],
            [
                'name' => 'Category 2',
                'description' => 'Deskripsi kategori 2',
            ],
            // Tambahkan data lain jika diperlukan
        ]);
    }
}
