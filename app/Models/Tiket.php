<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_pembeli',
        'kota_asal',
        'kota_tujuan',
        'waktu_transaksi',
        'status'
    ];
}
