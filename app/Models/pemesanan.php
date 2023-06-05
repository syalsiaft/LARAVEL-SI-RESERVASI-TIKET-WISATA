<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_jadwal',
        'id_user',
        'nama_pembeli',
        'alamat_pembeli',
        'email_pembeli',
        'no_telp_pembeli',
        'jumlah_tiket',
        'total_harga',
    ];
    public function penumpang()
    {
        return $this->hasMany(penumpang::class);
    }
    public function id_jadwal()
    {
        return $this->belongsTo(jadwal::class, 'id_jadwal', 'id');
    }
    public function id_user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
