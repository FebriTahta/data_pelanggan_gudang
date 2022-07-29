<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Imports\PelangganImport;
use Excel;

class ImportController extends Controller
{
    public function import_pelanggan(Request $request)
    {
        $data = Excel::import(new PelangganImport(), $request->file('file'));
        return Response()->json([
            $data,
            'success'=>'Data Berhasil Diimport'
        ]);
    }
}
