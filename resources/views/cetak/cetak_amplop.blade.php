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
    <div class="amplop" style="margin-left: 25%; margin-top: 200px">
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
    
        <div class="kop" style="margin-top: 80px; margin-left:40%; font-size: 14px">
            <table >
                <tr>
                    <td><b>KEPADA Yth</b></td>
                </tr>
                <tr>
                    <td><b>Ust/Ustd. {{$data->kepala}}</b></td>
                </tr>
                <tr>
                    <td><b>Telp. {{$data->telepon}}</b></td>
                </tr>
                <tr>
                    <td style=""><b style="">d/a. {{$data->alamat}}</b></td>
                </tr>
            </table>
        </div>

        @if ($data->ekspedisi !== null)
            <div class="ekspedisi">
                <b>Ekspedisi : {{$data->ekspedisi}}</b>
            </div>
        @endif
    </div>
    
</body>
</html>