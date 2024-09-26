<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    use HasFactory;

    // Tambahkan kolom yang diizinkan untuk mass assignment
    protected $fillable = ['nama'];
}
