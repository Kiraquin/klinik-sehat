<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';

    protected $fillable = [
        'nama_pasien', 
        'keluhan', 
        'diagnosa', 
        'hasil_periksa', 
        'jenis_pasien', 
        'total_pembayaran',
        'foto' // Tambahkan foto
    ];
    

    // Logika diskon
    public function hitungDiskon()
    {
        if ($this->jenis_pasien == 'BPJS' && $this->total_pembayaran >= 500000) {
            return $this->total_pembayaran * 0.4; // Diskon 60%
        } elseif ($this->jenis_pasien == 'Umum' && $this->total_pembayaran < 500000) {
            return $this->total_pembayaran * 0.9; // Diskon 10%
        } else {
            return $this->total_pembayaran; // Tidak ada diskon
        }
    }
}

