@extends('new_layouts.be_master')

@section('head')
<title>Konfirmasi Cetak Data Pelanggan</title>

<style>
    td {
       font-size: 18px; 
    }
</style>
@endsection

@section('content')
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-wpforms"></i>
                        Konfirmasi Cetak
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white" id="v-pills-tab">
                    <li>
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1">
                            <i class="icon icon-home2"></i>GUDANG</a>
                    </li>
                </ul>
                <a class="btn-fab absolute fab-right-bottom btn-primary" data-toggle="control-sidebar">
                    <i class="icon icon-menu"></i>
                </a>
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce" style="margin-top: 20px">
        <div class="tab-content pb-3" id="v-pills-tabContent">
            <!--Today Tab Start-->
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
                <div class="row">
                    <!--Grafik Berita Artikel-->
                    <div class="col-md-12">
                        <div class="white p-5 r-5">
                            <div class="card-title">
                                {{-- <h5> KONFIRMASI CETAK </h5> --}}
                                
                                <div class="amplop">
                                    <div class="bot" style="font-size: 14px">
                                        <table >
                                            <tr>
                                                <td style="width: 50%"><b>PENGIRIM</b></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50%"><b>Pesantren AL-Quran Nurul Falah</b></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50%"><b>Jl. Ketintang Timur PTT VB Surabaya</b></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50%"><b style="text-transform: uppercase">Telp. 031-8281278 / 8298887 Hp. 081333087809</b></td>
                                            </tr> 
                                            
                                        </table>
                                    </div>
                                
                                    {{-- <div class="kop" style="margin-top: 80px; font-size: 14px">
                                        @if ($pelanggan->ekspedisi !== null)
                                            <table >
                                                <tr>
                                                    <td><b>EKSPEDISI : </b></td>
                                                </tr>
                                                <tr>
                                                    <td><b>{{$pelanggan->ekspedisi}}</b></td>
                                                </tr>
                                            </table>
                                        @endif
                                    </div> --}}

                                    <div class="kop" style="margin-top: 80px; font-size: 14px">
                                        <table >
                                            <tr>
                                                <td style="width: 40%"></td>
                                                <td><b>KEPADA Yth</b></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 40%"></td>
                                                <td><b>Ust/Ustd. {{$pelanggan->kepala}}</b></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 40%">
                                                    @if (strlen($pelanggan->ekspedisi) > 2)
                                                        <b>EKSPEDISI : </b>
                                                    @endif
                                                </td>   
                                                <td><b>Telp. {{$pelanggan->telepon}}</b></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 40%">
                                                    @if (strlen($pelanggan->ekspedisi) > 2)
                                                        <b>{{$pelanggan->ekspedisi}} </b>
                                                    @endif
                                                </td>
                                                <td style=""><b style="">d/a. {{$pelanggan->alamat}}</b></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="white p-5 r-5" style="margin-top: 20px">
                            <a href="/admin-pelanggan-print-amplop-new/{{$pelanggan->id}}" target="_blank" class="btn btn-inline btn-primary"><i class="icon icon icon-printer white-text"></i> Cetak Amplop</a>
                            <a href="/admin-pelanggan-print-new/{{$pelanggan->id}}" target="_blank" class="btn btn-inline btn-success"><i class="icon icon icon-mail-checked white-text s-18"></i>Cetak Alamat Pengiriman</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Today Tab End-->
        </div>
    </div>
</div>
@endsection

@section('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

@endsection