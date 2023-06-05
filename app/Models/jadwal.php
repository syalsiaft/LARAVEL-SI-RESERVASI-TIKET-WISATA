<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;
    protected $fillable = [
        'kota_asal',
        'kota_tujuan',
        'id_transportasi',
        'id_user',
        'jam_berangkat',
        'jam_sampai',
        'harga'
    ];

    public function kota_asal()
    {
        return $this->belongsTo(Kota::class, 'kota_asal', 'id');
    }

    public function kota_tujuan()
    {
        return $this->belongsTo(Kota::class, 'kota_tujuan', 'id');
    }

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }

    public function id_transportasi()
    {
        return $this->belongsTo(transportasi::class, 'id_transportasi', 'id');
    }
    public function pemesanan()
    {
        return $this->hasMany(pemesanan::class);
    }
}
