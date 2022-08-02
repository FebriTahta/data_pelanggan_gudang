<?php

namespace App\Http\Controllers;
use App\Models\Cetak;
use App\Models\Pelanggan;
use DataTables;
use Validator;
use PDF;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function be_dashboard(Request $request)
    {
        $activity = Cetak::limit('10');
        return view('backend_new.dashboard',compact('activity'));
    }

    public function be_pelanggan(Request $request)
    {
        $activity = Cetak::limit('10');
        $total_pelanggan = Pelanggan::count();
        return view('backend_new.be_pelanggan',compact('activity','total_pelanggan'));
    }

    public function be_pelanggan_data(Request $request)
    {
        if ($request->ajax()) {
            # code...
            $data = Pelanggan::select('id','namacabang','status','kepala','alamat','kota','telepon','ekspedisi','provinsi')->get();
            return Datatables::of($data)                
                ->addColumn('action', function($data){
                    
                    $actionBtn = ' <a href="#" data-toggle="modal" data-target="#modaledit" data-id="'.$data->id.'" data-namacabang="'.$data->namacabang.'" data-status="'.$data->status.'" data-kepala="'.$data->kepala.'" data-alamat="'.$data->alamat.'"
                    data-kota="'.$data->kota.'" data-provinsi="'.$data->provinsi.'" data-telepon="'.$data->telepon.'" data-ekspedisi="'.$data->ekspedisi.'"
                    ><i class="icon icon icon-pencil-square-o blue-text s-18"></i></a>';
                    $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-namacabang="'.$data->namacabang.'" data-toggle="modal" href="javascript:void(0)" class="delete"><i class="icon icon icon-remove red-text s-18"></i></a>';
                    return $actionBtn;
                })
                ->addColumn('cetak', function($data){
                    $actionBtn  = ' <a href="#" data-toggle="modal" data-target="#modalcetak" data-id="'.$data->id.'" data-namacabang="'.$data->namacabang.'"><i class="icon icon icon-printer green-text s-18"></i></a>';
                    $actionBtn .= ' <a href="#" data-toggle="modal" data-target="#modalcetak2" data-id="'.$data->id.'" data-namacabang="'.$data->namacabang.'"><i class="icon icon icon-mail-checked blue-text s-18"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action','cetak'])
                ->make(true);
        }
    }

    public function be_add_pelanggan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'namacabang'  => 'required|max:100',
            'alamat'  => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {

            $data       = Pelanggan::updateOrCreate(
                [
                    'id'=>$request->id
                ],
                [
                    'namacabang'    => $request->namacabang,
                    'status'        => $request->status,
                    'kepala'        => $request->kepala,
                    'alamat'        => $request->alamat,
                    'kota'          => $request->kota,
                    'provinsi'      => $request->provinsi,
                    'telepon'       => $request->telepon,
                    'ekspedisi'     => $request->ekspedisi,
                ]
            );

            return response()->json([
                'status' => 200,
                'message'  => 'Response Sukses',
            ]);
        }
    }
    
    public function be_remove_pelanggan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id'  => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {
            $data = Pelanggan::findOrFail($request->id);
            if ($data !== null) {
                # code...
                $data->delete();
                return response()->json([
                    'status' => 200,
                    'message'  => 'Response Sukses',
                ]); 
            }else {
                # code...
                return response()->json([
                    'status' => 400,
                    'message'  => 'Data Tidak Ditemukan',
                ]);
            }
        }
    }

    public function be_print_pelanggan(Request $request)
    {
        $data = Pelanggan::findOrFail($request->id);
        $pdf  = PDF::loadview('cetak.cetak_pelanggan',compact('data'))->setPaper('A4','potrait');
        return $pdf->stream();
    }

    public function be_print_amplop(Request $request)
    {
        $data = Pelanggan::findOrFail($request->id);
        $pdf  = PDF::loadview('cetak.cetak_amplop',compact('data'))->setPaper('A4','landscape');
        return $pdf->stream();
    }


}
