<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penumpang extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pemesanan',
        'nama_penumpang',
        'no_seat',
    ];
    public function id_pemesanan()
    {
        return $this->belongsTo(pemesanan::class, 'id_pemesanan', 'id');
    }
}
