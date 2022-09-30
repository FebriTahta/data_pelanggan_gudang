<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{strtoupper($data->namacabang)}}</title>
    <style>
        b {
        font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <div class="cetak" style="margin-left: 80px">
        <div class="kop" style="line-height: 23px;">
            <table style="font-size: 17px; font-weight: 700">
                <tr>
                    <td><b>KEPADA Yth</b></td>
                </tr>
                <tr>
                    <td><b>Ust / Ustd. {{$data->kepala}}</b></td>
                </tr>
                <tr>
                    <td><b>Telp. {{$data->telepon}}</b></td>
                </tr>
                <tr>
                    @if (strlen($data->alamat) < 60)
                    <td style="width: 50%"><b style="text-transform: uppercase" style="width: 50%">
                        {{-- {{substr($data->alamat,0,50)}}</b> <br> <b>{{substr($data->alamat,50)}}</b> --}}
                        {{$data->alamat}}
                    </td>
                    <td style="width: 50%"></td>
                    @else
                    <td style="width: 68%"><b style="text-transform: uppercase">{{$data->alamat}}</b></td>
                    <td style="width: 38%"></td>
                    @endif
                </tr>
            </table>
        </div>
      
        <div class="bot" style="line-height: 23px; margin-top: 50px">
            <table style="font-size: 17px; font-weight: 700">
                <tr>
                    <td><b>PENGIRIM</b></td>
                </tr>
                <tr>
                    <td><b>Pesantren AL-Quran Nurul Falah</b></td>
                </tr>
                <tr>
                    <td><b>Jl. Ketintang Timur PTT VB Surabaya</b></td>
                </tr>
                <tr>
                    <td style="width: 70%"><b style="text-transform: uppercase">Telp. 031-8281278 / 0856 0796 0078</b></td>
                    <td style="width: 30%"></td>
                </tr> 
                
            </table>
        </div>
    </div>
    
</body>
</html>