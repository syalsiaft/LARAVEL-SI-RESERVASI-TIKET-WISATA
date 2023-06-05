<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transportasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode',
        'nama_transportasi',
        'jenis_transportasi',
        'kelas',
        'jumlah_kursi',
    ];

    public function jadwal()
    {
        return $this->hasMany(jadwal::class);
    }
}
