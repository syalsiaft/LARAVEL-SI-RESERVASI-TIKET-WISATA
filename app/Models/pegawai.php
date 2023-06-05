<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'password',
        'no_telp',
        'role'
    ];
    public function pemesanan()
    {
        return $this->hasMany(pemesanan::class);
    }
}
