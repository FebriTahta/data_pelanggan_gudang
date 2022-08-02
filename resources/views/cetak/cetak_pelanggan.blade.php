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
    <div class="kop" style="line-height: 20px;">
        <table style="font-size: 20px; font-weight: 900">
            <tr>
                <td><b>KEPADA YTH</b></td>
            </tr>
            <tr>
                <td><b>Ust / Ustd. {{$data->kepala}}</b></td>
            </tr>
            <tr>
                <td><b>Telp. {{$data->telepon}}</b></td>
            </tr>
            <tr>
                <td style="width: 80%"><b style="text-transform: uppercase">{{$data->alamat}}</b></td>
                <td style="width: 40%"></td>
            </tr>
            
        </table>
    </div>

    <div class="bot" style="line-height: 20px; margin-top: 50px">
        <table style="font-size: 20px; font-weight: 900">
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
                <td style="width: 80%"><b style="text-transform: uppercase">Telp. 031-8281278 / 8298887 Hp. 081333087809</b></td>
                <td style="width: 40%"></td>
            </tr>
            
        </table>
    </div>
</body>
</html>