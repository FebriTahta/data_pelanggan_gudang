<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cetak extends Model
{
    use HasFactory;
    protected $fillable = [
        'pelanggan_id',
        'tanggal'
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }


}
