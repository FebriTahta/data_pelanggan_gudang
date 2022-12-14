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
            <table style="font-size: 16px; font-weight: 700">
                <tr>
                    <td><b>KEPADA YTH.</b></td>
                </tr>
                <tr>
                    <td style="text-transform: uppercase"><b>UST / USTD. {{$data->kepala}}</b></td>
                </tr>
                <tr>
                    <td><b>TElP. {{$data->telepon}}</b></td>
                </tr>
                <tr>
                    @if (strlen($data->alamat) < 60 || strlen($data->alamat) == 60)
                    <td style="width: 50%"><b style="text-transform: capitalize" style="width: 50%">
                        {{substr(ucfirst(strtolower($data->alamat)),0,50)}}</b> <br> <b>{{substr(ucfirst(strtolower($data->alamat)),50)}}</b>
                        {{-- {{$data->alamat}} --}}
                    </td>
                    <td style="width: 50%"></td>
                    @else
                    <td style="width: 75%"><b style="text-transform: capitalize">{{ucfirst(strtolower($data->alamat))}}</b></td>
                    <td style="width: 25%"></td>
                    @endif
                </tr>
            </table>
        </div>
      
        <div class="bot"
        @if (strlen($data->alamat) < 60 || strlen($data->alamat) == 60)
        style="line-height: 23px; margin-top: 50px"
        @else
        style="line-height: 23px; margin-top: 40px"
        @endif 
        >
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
                    <td style="width: 70%"><b style="text-transform: capitalize">Telp. 031-8281278 / 0856 0796 0078</b></td>
                    <td style="width: 30%"></td>
                </tr> 
                
            </table>
        </div>
    </div>
    
</body>
</html>