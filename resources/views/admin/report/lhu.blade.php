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
            <h2 style="text-align:center; text-decoration:underline;margin:0px;">LAPORAN HASIL UJI</h2>

            {{-- <p style="text-align: justify;">Yang bertanda Tangan Dibawah ini:</p> --}}
            {{-- <h2 style="text-align: center; text-transform:uppercase;text-decoration:underline;">
                {{'TES'}}</h2> --}}
            <br>
            <table style="font-size:15px !important">
                <tr style="vertical-align: top; text-align: justify; !important">
                    <td style="height:15px !important;">Nama Pelanggan</td>
                    <td>:</td>
                    <td>{{$permohonan->user->nama}}
                    </td>
                </tr>
                <tr style="vertical-align: top; text-align: justify; !important">
                    <td style="height:15px !important;">Alamat</td>
                    <td>:</td>
                    <td>{{$permohonan->user->alamat}}
                    </td>
                </tr>
                <tr style="vertical-align: top; text-align: justify; !important">
                    <td style="height:15px !important;">Telp/Fax</td>
                    <td>:</td>
                    <td>{{$permohonan->user->no_hp}}
                    </td>
                </tr>
                <tr style="vertical-align: top; text-align: justify; !important">
                    <td style="height:15px !important;">Personel Yang Dihubungi</td>
                    <td>:</td>
                    <td>{{$data->first()->nama_kontak}}
                    </td>
                </tr>
                <tr>
                    <td style="height:15px !important;">Nomor LHU</td>
                    <td>:</td>
                    <td>PTL.M.01{{$permohonan->id}}/LHU/BBTKL-BB/X/{{Carbon\carbon::parse($permohonan->created_at)->format('Y')}}
                    </td>
                </tr>
                <tr>
                    <td style="height:15px !important;">No. FPPS</td>
                    <td>:</td>
                    <td>PR.0{{$permohonan->id}}/STP/BBTKL/VI/{{Carbon\carbon::parse($permohonan->created_at)->format('Y')}}
                    </td>
                </tr>
                <tr>
                    <td style="height:15px !important;">No. Sampel</td>
                    <td>:</td>
                    <td>PR.{{Carbon\carbon::parse($permohonan->created_at)->format('Y.m')}}977.980</td>
                </tr>
                <tr>
                    <td style="height:15px !important;">Tanggal Pengambilan Sampel</td>
                    <td>:</td>
                    <td>{{Carbon\carbon::parse($permohonan->tanggal_jam_terima)->format('d F Y')}}</td>
                </tr>
                <tr>
                    <td style="height:15px !important;">Petugas Pengambil Sampel</td>
                    <td>:</td>
                    <td>
                        @foreach ($data as $d)
                        {{$d->detail_stp->user->nama}},
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td style="height:15px !important;">Tanggal Pengujian Sampel</td>
                    <td>:</td>
                    <td>{{Carbon\carbon::parse($permohonan->tanggal_jam_sampling)->format('d F Y')}}</td>
                </tr>

                <tr>
                    <td style="height:15px !important;">Hasil Pengujian</td>
                    <td>:</td>
                    <td>


                    </td>
                </tr>

            </table>
            {{-- <h2 style="text-align: center; text-transform:uppercase;text-decoration:underline;">
                            {{'TES'}}</h2> --}}
            <div style="font-size : 10px !important" class="table-responsive m-t-40">
                <table id="table" class="table table-bordered table-striped">
                    <thead style="background-color: rgb(204, 204, 255)">
                        <tr>
                            <th style="
            border: 1px solid black; !important" rowspan="2">No</th>
                            <th style="
            border: 1px solid black; !important" rowspan="2">Parameter</th>
                            <th style="
            border: 1px solid black; !important" rowspan="2">Satuan</th>
                            <th style="
            border: 1px solid black; !important" rowspan="2">LOD</th>
                            <th style="
            border: 1px solid black; !important" rowspan="2">Hasil Pengujian</th>
                            <th style="
            border: 1px solid black; !important" colspan="4">Baku Mutu</th>
                            <th style="
            border: 1px solid black; !important" rowspan="2">Sertifikasi Metode</th>
                        </tr>
                        <tr>
                            <th style="
            border: 1px solid black; !important">Kelas I</th>
                            <th style="
            border: 1px solid black; !important">Kelas II</th>
                            <th style="
            border: 1px solid black; !important">Kelas III</th>
                            <th style="
            border: 1px solid black; !important">Kelas IV</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($data as $d)

                        <tr style="text-align: center !important">
                            <td width="2%" style="
            border: 1px solid black; !important">{{$loop->iteration}}</td>
                            <td width="5%" style="
            border: 1px solid black; !important">{{$d->detail_stp->detail_jenis_pengujian->nama}}
                                ({{$d->detail_stp->detail_jenis_pengujian->kode}})</td>
                            <td width="5%" style="
            border: 1px solid black; !important">{{$d->detail_stp->detail_jenis_pengujian->satuan}}</td>
                            <td width="5%" style="
            border: 1px solid black; !important">{{$d->lod}}</td>
                            <td width="5%" style="
            border: 1px solid black; !important">{{$d->hasil_pengujian}}</td>
                            <td style="
            border: 1px solid black; !important" width="5%">{{$d->hasil1}}</td>
                            <td style="
            border: 1px solid black; !important" width="5%">{{$d->hasil2}}</td>
                            <td style="
            border: 1px solid black; !important" width="5%">{{$d->hasil3}}</td>
                            <td style="
            border: 1px solid black; !important" width="5%">{{$d->hasil4}}</td>
                            <td width="10%" style="
            border: 1px solid black; !important">{{$d->metode_spesifikasi}}
                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
            <div style="font-size: 10px !important">
                <p style="text-align: justify;"><b>Keterangan :</b></p>
                <table>
                    <tr>
                        <td width="3px">1.</td>
                        <td>* Parameter tidak terakreditasi</td>
                    </tr>
                    <tr>
                        <td width="3px">2.</td>
                        <td>*) Peraturan Gubernur Kalimantan Selatan No.05 Tahun 2007 tentang Baku Mutu Air Badan Air
                        </td>
                    </tr>
                    <tr>
                        <td width="3px">3.</td>
                        <td>(-) Menyatakan bahwa untuk kelas termaksud parameter tersebut tidak dipersyaratkan
                        </td>
                    </tr>
                    <tr>
                        <td width="3px">4.</td>
                        <td>** Bukan pemeriksaan insitu
                        </td>
                    </tr>
                    <tr>
                        <td width="3px">5.</td>
                        <td>Logam berat yang diuji merupakan logam terlarut
                        </td>
                    </tr>
                    <tr>
                        <td width="3px">6.</td>
                        <td>Deskripsi Sampel :
                            PR.{{Carbon\carbon::parse($permohonan->created_at)->format('Y.m')}}977.980 =
                            {{$permohonan->deskripsi}}
                        </td>
                    </tr>
                </table>
                <br>
                <div style="font-size: 10px !important">
                    <p style="text-align: justify;"><b>Catatan :</b></p>
                    <table>
                        <tr>
                            <td width="3px">1.</td>
                            <td>Laporan Hasil Uji (LHU) hanya berlaku untuk sampel yang diuji</td>
                        </tr>
                        <tr>
                            <td width="3px">2.</td>
                            <td>Hasil uji ini terdiri dari 1 halaman
                            </td>
                        </tr>
                        <tr>
                            <td width="3px">3.</td>
                            <td>Laporan Hasil Uji ini tidak boleh digandakan tanpa seijin tertulis dari Laboratorium
                                Penguji BBTKLPP Banjarbaru, kecuali
                                secara lengkap
                            </td>
                        </tr>
                        <tr>
                            <td width="3px">4.</td>
                            <td>Laboratorium melayani pengaduan tentang hasil pengujian paling lama 1 (satu) bulan
                                setelah LHU diterbitkan
                            </td>
                        </tr>

                    </table>
                </div>
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
                        Manajer Teknik,
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h5 style="text-decoration:underline; margin:0px">Sri Wahyuni, S.Km, M.Sc</h5>
                        <h5 style="margin:0px">NIP. 19750814 199903 2 001</h5>
                        {{-- <h5 style="margin:0px">(........................)</h5> --}}
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>