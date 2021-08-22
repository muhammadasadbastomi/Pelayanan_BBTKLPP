<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h4,
        h2 {
            font-family: serif;
        }

        body {
            font-family: sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table,
        th,
        td {
            border: none;
        }


        th {
            text-align: center;
        }

        td {
            text-align: left;
        }

        br {
            margin-bottom: 5px !important;
        }

        .judul {
            text-align: center;
        }

        .header {
            margin-bottom: 0px;
            text-align: center;
            height: 110px;
            padding: 0px;
        }

        .pemko {
            width: 100px;
        }

        .logo {
            float: left;
            margin-right: 0px;
            width: 18%;
            padding: 0px;
            text-align: right;
        }

        .headtext {
            float: right;
            margin-left: 0px;
            width: 72%;
            padding-left: 0px;
            padding-right: 10%;
        }

        hr {
            margin-top: 10%;
            height: 3px;
            background-color: black;
            width: 100%;
        }

        .ttd {
            margin-left: 65%;
            text-align: center;
            text-transform: uppercase;
        }

        .text-right {
            text-align: right;
        }

        .isi {
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo">
            <img class="pemko" src="ART.png">
        </div>
        <div class="headtext">
            <h3 style="margin:0px;">BALAI BESAR TEKNIK KESEHATAN LINGKUNGAN DAN PENGENDALIAN PENYAKIT </h3>
            <h3 style="margin:0px;">KOTA BANJARBARU</h3>
            <p style="margin:0px;">Jl.H. M. Cokrokusumo No. 2 A Banjarbaru Kode Pos 70714
            </p>
        </div>
        <br>
    </div>
    <div class="container">
        <hr style="margin-top:1px;">
        <div class="isi">
            <h2 style="text-align:center; text-decoration:underline;margin:0px;">LAPORAN HASIL UJI SEMENTARA (LHUS)</h2>
            <h5 style="text-align:center; text-decoration:underline; margin:10px;">No:
                PR.0{{$permohonan->id}}/STP/BBTKL/VI/{{Carbon\carbon::parse($permohonan->created_at)->format('Y')}}</h5>
            <br>
            {{-- <p style="text-align: justify;">Yang bertanda Tangan Dibawah ini:</p> --}}
            {{-- <h2 style="text-align: center; text-transform:uppercase;text-decoration:underline;">
                {{'TES'}}</h2> --}}
            <table>
                <tr style="vertical-align: top; text-align: justify; !important">
                    <td style="height:30px !important;">Bidang Pengujian</td>
                    <td>:</td>
                    <td>Faktor Resiko, Mikrobiologi, Virologi dan Imunologi, Parasitologi, Entimologi (pilih salah satu)
                    </td>
                </tr>
                <tr>
                    <td style="height:30px !important;">No. FPPS</td>
                    <td>:</td>
                    <td>PR.0{{$permohonan->id}}/STP/BBTKL/VI/{{Carbon\carbon::parse($permohonan->created_at)->format('Y')}}
                    </td>
                </tr>
                <tr>
                    <td style="height:30px !important;">Kode Sampel</td>
                    <td>:</td>
                    <td>PR.{{Carbon\carbon::parse($permohonan->created_at)->format('Y.m')}}977.980</td>
                </tr>
                <tr>
                    <td style="height:30px !important;">Jenis Komoditi</td>
                    <td>:</td>
                    <td>
                        {{$permohonan->detail_permohonan->first()->detail_jenis_pengujian->jenis_pengujian->nama_metode}}

                    </td>
                </tr>

            </table>

            <p style="text-align: justify;">Menugaskan Kepada:</p>
            {{-- <h2 style="text-align: center; text-transform:uppercase;text-decoration:underline;">
                            {{'TES'}}</h2> --}}
            <div style="" class="table-responsive m-t-40">
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="
            border: 1px solid black; !important">No</th>
                            <th style="
            border: 1px solid black; !important">Parameter</th>
                            <th style="
            border: 1px solid black; !important">Satuan</th>
                            <th colspan="5" style="
            border: 1px solid black; !important">Hasil</th>
                            <th style="
            border: 1px solid black; !important">Tanggal</th>
                            <th style="
            border: 1px solid black; !important">Paraf</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)

                        <tr style="text-align: center !important">
                            <td width="5%" style="
            border: 1px solid black; !important">{{$loop->iteration}}</td>
                            <td width="5%" style="
            border: 1px solid black; !important">{{$d->detail_stp->detail_jenis_pengujian->nama}}
                                ({{$d->detail_stp->detail_jenis_pengujian->kode}})</td>
                            <td width="5%" style="
            border: 1px solid black; !important">{{$d->detail_stp->detail_jenis_pengujian->satuan}}</td>
                            <td style="
            border: 1px solid black; !important" width="5%">{{$d->hasil1}}</td>
                            <td style="
            border: 1px solid black; !important" width="5%">{{$d->hasil2}}</td>
                            <td style="
            border: 1px solid black; !important" width="5%">{{$d->hasil3}}</td>
                            <td style="
            border: 1px solid black; !important" width="5%">{{$d->hasil4}}</td>
                            <td style="
            border: 1px solid black; !important" width="5%">{{$d->hasil5}}</td>
                            <td width="5%" style="
            border: 1px solid black; !important">{{carbon\carbon::parse($d->tanggal_uji)->translatedFormat('d/m/y')}}
                            </td>
                            <td width="5%" style="
            border: 1px solid black; !important">
                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
            <br>
            <table>
                <tr>
                    <td width="65%"></td>
                    <td>
                        Banjarbaru, {{$now}} <br>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="text-align: right; width:60%">
                    </td>
                    <td style="text-align: center;">
                        Penyelia Terkait,
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        {{-- <h5 style="text-decoration:underline; margin:0px">Agus Fahlufi, SIP, M.Si</h5> --}}
                        {{-- <h5 style="margin:0px">NIP. 19710830 199101 1 002</h5> --}}
                        <h5 style="margin:0px">(........................)</h5>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>