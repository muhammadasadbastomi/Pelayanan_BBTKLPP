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
            <h2 style="text-align:center; text-decoration:underline;margin:0px;">PERMINTAAN PENGUJIAN SAMPEL DAN KAJI
                ULANG PERMINTAAN (DETAIL FPPS)</h2>
            <h5 style="text-align:center; text-decoration:underline; margin:10px;">No:
                PR.0{{$data->id}}/FPPS/BBTKL/VI/{{Carbon\carbon::parse($data->created_at)->format('Y')}}</h5>
            <br>
            <p style="text-align: justify;">Untuk dilakukan pengujian sebagai berikut/<i>For the following system</i> :
            </p>
            {{-- <h2 style="text-align: center; text-transform:uppercase;text-decoration:underline;">
                {{'TES'}}</h2> --}}
            <br>
            <div style="" class="table-responsive m-t-40">
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="
            border: 1px solid black; !important">No</th>
                            <th style="
            border: 1px solid black; !important">Nama Detail Jenis Pengujian</th>
                            <th style="
            border: 1px solid black; !important">Harga</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center !important">
                        @foreach ($data->detail_permohonan as $d)
                        <tr>
                            <td style="
            border: 1px solid black; !important">{{$loop->iteration}}</td>
                            <td style="
            border: 1px solid black; !important">
                                {{$d->detail_jenis_pengujian->nama}}</td>
                            <td style="
            border: 1px solid black; !important">{{$d->harga}}</td>

                        </tr>
                        @endforeach
                        <tr>
                            <td style="
            border: 1px solid black; !important" colspan="2"><b>Total</b></td>
                            <td style="
            border: 1px solid black; !important"><b>Rp.{{$data->detail_permohonan->sum('harga')}}</b></td>
                            @if($data->status == 0)
                            <td style="
            border: 1px solid black; !important">-</td>
                            @endif
                        </tr>

                    </tbody>

                </table>
            </div>
            <br>
            <p style="text-align: justify;">Kaji Ulang Permintaan :
            </p>
            <div style="" class="table-responsive m-t-40">
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="
                        border: 1px solid black; !important">No</th>
                            <th style="
                        border: 1px solid black; !important">Unsur Kaji Ulang</th>
                            <th style="
                        border: 1px solid black; !important">Hasil Kaji Ulang</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center !important">
                        <tr>
                            <td style="
                        border: 1px solid black; !important">1</td>
                            <td style="
                        border: 1px solid black; !important">
                                Kemampuan Personel</td>
                            <td style="
                        border: 1px solid black; !important">{{$data->kemampuan_personel}}</td>
                        </tr>
                        <tr>
                            <td style="
                        border: 1px solid black; !important">2</td>
                            <td style="
                        border: 1px solid black; !important">
                                Kondisi Akomodasi</td>
                            <td style="
                        border: 1px solid black; !important">{{$data->status_kondisi}}</td>
                        </tr>
                        <tr>
                            <td style="
                        border: 1px solid black; !important">3</td>
                            <td style="
                        border: 1px solid black; !important">
                                Beban Pekerjaan Laboratorium</td>
                            <td style="
                        border: 1px solid black; !important">{{$data->status_beban_kerja}}</td>
                        </tr>
                        <tr>
                            <td style="
                        border: 1px solid black; !important">4</td>
                            <td style="
                        border: 1px solid black; !important">
                                Kondisi Peralatan Pengujian</td>
                            <td style="
                        border: 1px solid black; !important">{{$data->status_kondisi_peralatan}}</td>
                        </tr>
                        <tr>
                            <td style="
                        border: 1px solid black; !important">5</td>
                            <td style="
                        border: 1px solid black; !important">
                                Kesesuaian Metode</td>
                            <td style="
                        border: 1px solid black; !important">{{$data->status_kesesuaian_metode}}</td>
                        </tr>

                    </tbody>

                </table>
            </div>
            <p style="text-align: justify;">Kesimpulan : Permintaan
                {{$data->status_terima == 1 ? 'Dapat Dilayani' : 'Tidak Dapat Dilayani'}} dilayani
            </p>
            <br>
            <br>
            <table>
                <tr>

                    <td style="text-align: center; border: 1px solid black; !important">
                        Diberikan Oleh,
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h5 style="text-decoration:underline; margin:0px">{{$data->user->nama}}</h5>
                        {{-- <h5 style="margin:0px">NIP. 19710830 199101 1 002</h5> --}}
                        {{-- <h5 style="margin:0px">(........................)</h5> --}}
                    </td>
                    <td style="text-align: center; border: 1px solid black; !important">
                        Diterima Oleh,
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        {{-- <h5 style="text-decoration:underline; margin:0px">{{$data->user->nama}}</h5> --}}
                        {{-- <h5 style="margin:0px">NIP. 19710830 199101 1 002</h5> --}}
                        <h5 style="margin:0px">(........................)</h5>
                    </td>
                </tr>
            </table>
            <p style="text-align: justify;">Catatan :
            </p>
            <table>
                <tr>

                    <td>1. Lembar putih untuk administrasi laboratorium, kuning untuk <i>customer</i>.</td>
                </tr>
                <tr>

                    <td>2. Masa simpan sampel di laboratorium maksimal 1 (satu) bulan, atau sesuai kebutuhan.</td>
                </tr>
            </table>


        </div>
    </div>
</body>

</html>