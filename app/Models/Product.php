<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	use HasFactory;

	protected $table = 'products'; // Nama tabel yang diakses oleh model ini

    // Metode untuk mengambil satu data teratas
    public function getTopData()
    {
        return $this->latest()->first();
    }
}
