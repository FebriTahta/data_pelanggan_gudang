<?php

namespace App\Imports;
use App\Models\Pelanggan;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\ToCollection;

class PelangganImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            # code...
            if ($key >= 1) {
                $dt_pel = new Pelanggan;
                $dt_pel->namacabang = $row[2];
                $dt_pel->status = $row[3];
                $dt_pel->kepala = $row[4];
                $dt_pel->alamat = $row[5];
                $dt_pel->kota   = $row[6];
                $dt_pel->provinsi = $row[7];
                $dt_pel->telepon = $row[8];
                $dt_pel->ekspedisi = $row[9];
                $dt_pel->save();
            }

        }
    }
}
