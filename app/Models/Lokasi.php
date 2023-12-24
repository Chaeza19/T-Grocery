<?php

// app/Models/Lokasi.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $table = 'lokasi'; // Sesuaikan dengan nama tabel di database
    protected $fillable = ['id', 'nama']; // Sesuaikan dengan kolom-kolom yang dapat diisi
}

