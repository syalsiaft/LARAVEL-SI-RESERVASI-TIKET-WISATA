<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class kota extends Model
{
    use HasFactory;
    protected $fillable = [
        'kota',
    ];
    public function jadwal()
    {
        return $this->hasMany(jadwal::class);
    }
}
