<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $fillable = [
        'namacabang','status','kepala','alamat','kota','provinsi','telepon','ekspedisi'
    ];

    public function cetak()
    {
        return $this->hasMany(Cetak::class);
    }
}
