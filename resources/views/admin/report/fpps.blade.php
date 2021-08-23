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
                ULANG PERMINTAAN</h2>
            <h5 style="text-align:center; text-decoration:underline; margin:10px;">No:
                PR.0{{$data->id}}/FPPS/BBTKL/VI/{{Carbon\carbon::parse($data->created_at)->format('Y')}}</h5>
            <br>
            {{-- <p style="text-align: justify;">Yang bertanda Tangan Dibawah ini:</p> --}}
            {{-- <h2 style="text-align: center; text-transform:uppercase;text-decoration:underline;">
                {{'TES'}}</h2> --}}
            <table>
                <tr>
                    <td width="200px" style="height:30px !important;">Nama Pelanggan</td>
                    <td width="3px">:</td>
                    <td>{{$data->user->nama}}</td>
                </tr>
                <tr>
                    <td width="200px" style="height:30px !important;">Alamat</td>
                    <td width="3px">:</td>
                    <td>
                        {{$data->user->alamat}}

                    </td>
                </tr>
                <tr>
                    <td width="200px" style="height:30px !important;">Personel Yang Dihubungi</td>
                    <td width="3px">:</td>
                    <td>{{$data->user->nama}}</td>
                </tr>
                <tr>
                    <td width="200px" style="height:30px !important;">No. Telepon</td>
                    <td width="3px">:</td>
                    <td>{{$data->user->no_hp}}</td>
                </tr>

            </table>
            <br>
            <div style="" class="table-responsive m-t-40">
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="
            border: 1px solid black; !important">No</th>
                            <th style="
            border: 1px solid black; !important">Jenis Sampel</th>
                            <th style="
            border: 1px solid black; !important">Jumlah Sampel</th>
                            <th style="
            border: 1px solid black; !important">Deskripsi Sampel</th>
                            <th style="
            border: 1px solid black; !important">Bentuk</th>
                            <th style="
            border: 1px solid black; !important">Berat/Isi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr style="text-align: center !important">
                            <td style="
            border: 1px solid black; !important">1</td>
                            <td style="
            border: 1px solid black; !important">
                                {{$data->first()->jenis_pengujian->nama_metode}}</td>
                            <td style="
            border: 1px solid black; !important">{{$data->jumlah}}</td>
                            <td style="
            border: 1px solid black; !important">{{$data->deskripsi}}
                            </td>
                            <td style="
            border: 1px solid black; !important">{{$data->bentuk}}
                            </td>
                            <td style="
            border: 1px solid black; !important">{{$data->berat}}
                            </td>
                        </tr>

                    </tbody>

                </table>
            </div>
            <br>
            <table>
                <tr>
                    <td width="200px" style="height:30px !important;">Wadah (Packing)</td>
                    <td width="3px">:</td>
                    <td>{{$data->wadah}}</td>
                </tr>
                <tr>
                    <td width="200px" style="height:30px !important;">Tanggal Jam Penerimaan</td>
                    <td width="3px">:</td>
                    <td>
                        {{carbon\carbon::parse($data->tanggal_jam_terima)->translatedFormat('d F Y')}}

                    </td>
                </tr>
                <tr>
                    <td width="200px" style="height:30px !important;">Tanggal Jam Sampling</td>
                    <td width="3px">:</td>
                    <td>{{carbon\carbon::parse($data->tanggal_jam_sampling)->translatedFormat('d F Y')}}</td>
                </tr>
                <tr>
                    <td width="200px" style="height:30px !important;">Sifat Sample</td>
                    <td width="3px">:</td>
                    <td>{{$data->sifat}}</td>
                </tr>

            </table>
            <br>
            <br>
        </div>
    </div>
</body>

</html>