@extends('layouts.penyelia')

@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Data Permohonan</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            @if ($permohonan->stp->detail_stp->first()->lhus->count() == 0)

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item ">Data Permohonan</li>
                <li class="breadcrumb-item active">Detail</li>
            </ol>
            @endif
            @if($permohonan->stp->detail_stp->count() != 0)
            <a href="" class="btn btn-info btn-sm m-l-15"><i class="fa fa-print"></i>
                Cetak
                STP</a>
            @endif
            @if($permohonan->stp->detail_stp->first()->lhus->count() != 0)
            <a href="" class="btn btn-info btn-sm m-l-15"><i class="fa fa-print"></i>
                Cetak
                LHUS</a>
            @endif
            @if($permohonan->stp->detail_stp->first()->lhu->count() != 0)
            <a href="" class="btn btn-info btn-sm m-l-15"><i class="fa fa-print"></i>
                Cetak
                LHU</a>
            @endif
            {{-- if user penyelia --}}
            @if (Auth::user()->role == 2)
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item ">Data Permohonan</li>
                <li class="breadcrumb-item active">Detail</li>
            </ol>
            @if ($permohonan->status == 3)
            <button type="button" data-status="4" data-text="Verifikasi Penerimaan Sampel dari Petugas Teknik"
                data-route="{{Route('penyelia.permohonan.update',$permohonan->id)}}"
                class="btn btn-sm btn-info m-l-15 verif" data-toggle="modal" data-target="#exampleModalVerif"><i
                    class="fa fa-check"></i> Verifikasi Penerimaan Sampel dari Petugas Teknik
            </button>
            @endif
            @if ($permohonan->status == 4)
            <button type="button" data-status="5" data-text="Proses analisis sampel ke laboratorium"
                data-route="{{Route('penyelia.permohonan.update',$permohonan->id)}}"
                class="btn btn-sm btn-info m-l-15 verif" data-toggle="modal" data-target="#exampleModalVerif"><i
                    class="fa fa-check"></i> Proses analisis sampel ke laboratorium
            </button>
            @endif
            @if ($permohonan->status == 5)
            <button type="button" data-status="6"
                data-text="Proses verifikasi LHUS dan penyerahan kepada petugas pelayanan teknik"
                data-route="{{Route('penyelia.permohonan.update',$permohonan->id)}}"
                class="btn btn-sm btn-info m-l-15 verif" data-toggle="modal" data-target="#exampleModalVerif"><i
                    class="fa fa-check"></i> Proses verifikasi LHUS dan penyerahan kepada petugas pelayanan teknik
            </button>
            @endif
            @else
            @if ($permohonan->status == 1)

            <button type="button" data-status="2" data-text="Verifikasi Penerimaan Sampel"
                data-route="{{Route('admin.permohonan.update',$permohonan->id)}}"
                class="btn btn-sm btn-info m-l-15 verif" data-toggle="modal" data-target="#exampleModalVerif"><i
                    class="fa fa-check"></i> Verifikasi Penerimaan Sampel
            </button>
            @elseif($permohonan->status == 2)
            <a href="{{Route('admin.stp.index',$permohonan->id)}}" class="btn btn-info btn-sm m-l-15"><i
                    class="fa  fa-book"></i> Data
                STP</a>
            @if ($permohonan->stp != null)
            @if($permohonan->stp->detail_stp->count() > 0)

            <a href="{{Route('admin.lhus.index',$permohonan->id)}}" class="btn btn-info btn-sm m-l-15"><i
                    class="fa  fa-book"></i> Data
                LHUS</a>

            @if ($permohonan->stp->detail_stp->first()->lhus->count() > 0)
            <button type="button" data-status="3"
                data-text="Apakah anda yakin ingin mengirim Sampel, STP dan LHUS Kepada Petugas Laboratorium"
                data-route="{{Route('admin.permohonan.update',$permohonan->id)}}"
                class="btn btn-sm btn-info m-l-15 verif" data-toggle="modal" data-target="#exampleModalVerif"><i
                    class="fa fa-check"></i> Kirim Sampel, STP dan LHUS Kepada Petugas Laboratorium
            </button>
            @endif
            @endif
            @endif
            @elseif ($permohonan->status == 6)
            <button type="button" data-status="7" data-text="Verifikasi Penerimaan LHUS dari petugas penyelia"
                data-route="{{Route('admin.permohonan.update',$permohonan->id)}}"
                class="btn btn-sm btn-info m-l-15 verif" data-toggle="modal" data-target="#exampleModalVerif"><i
                    class="fa fa-check"></i>Verifikasi Penerimaan LHUS dari petugas penyelia </button>
            @elseif ($permohonan->status == 7)
            <a href="{{Route('admin.lhu.index',$permohonan->id)}}" class="btn btn-info btn-sm m-l-15"><i
                    class="fa  fa-book"></i>
                Data Draft
                LHU</a>
            @if($permohonan->stp->detail_stp->first()->lhu->count() != 0)
            <button type="button" data-status="8" data-text="Verifikasi Sampel Telah Selesai Diuji"
                data-route="{{Route('admin.permohonan.update',$permohonan->id)}}"
                class="btn btn-sm btn-info m-l-15 verif" data-toggle="modal" data-target="#exampleModalVerif"><i
                    class="fa fa-check"></i> Verifikasi Selesai Diuji
            </button>
            @endif
            @elseif ($permohonan->status == 8)
            <button type="button" data-status="9" data-text="Update Status Menunggu Pengambilan LHU dan Pembayaran"
                data-route="{{Route('admin.permohonan.update',$permohonan->id)}}"
                class="btn btn-sm btn-info m-l-15 verif" data-toggle="modal" data-target="#exampleModalVerif"><i
                    class="fa fa-check"></i> Update Status Menunggu Pengambilan LHU dan Pembayaran
            </button>
            @elseif ($permohonan->status == 9)
            <button type="button" data-status="10" data-text="Selesai Pengambilan LHU dan Pembayaran "
                data-route="{{Route('admin.permohonan.update',$permohonan->id)}}"
                class="btn btn-sm btn-info m-l-15 verif" data-toggle="modal" data-target="#exampleModalVerif"><i
                    class="fa fa-check"></i> Selesai Pengambilan LHU dan Pembayaran
            </button>
            @endif
            @endif
            {{-- <a href="{{Route('admin.permohonan.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i
                class="fa fa-plus-circle"></i> Tambah
            Data</a> --}}
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-striped  no-footer " role="grid"
                        aria-describedby="myTable_info">
                        <tbody>
                            <tr>
                                <td width="30%">Nama Jenis Sampel</td>
                                <td width="3px">:</td>
                                <td>{{$permohonan->jenis_pengujian->nama_metode}}</td>
                            </tr>
                            <tr>
                                <td width="30%">Jumlah Sampel</td>
                                <td width="3px">:</td>
                                <td>{{$permohonan->jumlah}}</td>
                            </tr>
                            <tr>
                                <td width="30%">Berat Sampel</td>
                                <td width="3px">:</td>
                                <td>{{$permohonan->berat}}</td>
                            </tr>
                            <tr>
                                <td width="30%">Deskripsi Sampel</td>
                                <td width="3px">:</td>
                                <td>{{$permohonan->deskripsi}}</td>
                            </tr>
                            <tr>
                                <td width="30%">Bentuk Sampel</td>
                                <td width="3px">:</td>
                                <td>{{$permohonan->bentuk}}</td>
                            </tr>
                            <tr>
                                <td width="30%">Wadah Sampel</td>
                                <td width="3px">:</td>
                                <td>{{$permohonan->wadah}}</td>
                            </tr>
                            <tr>
                                <td width="30%">Sifat Sampel</td>
                                <td width="3px">:</td>
                                <td>{{$permohonan->sifat}}</td>
                            </tr>
                            <tr>
                                <td width="30%">Status Permohonan</td>
                                <td width="3px">:</td>
                                <td>
                                    @switch($permohonan->status)
                                    @case(0)
                                    <button class="btn btn-sm btn-warning">Menunggu Verifikasi Petugas Pelayanan
                                        Teknik</button>
                                    @break
                                    @case(1)
                                    <button class="btn btn-sm btn-warning">Menunggu Penyerahan Sampel</button>

                                    @break
                                    @case(2)
                                    <button class="btn btn-sm btn-warning">Proses LHUS (Laporan Hasil Uji Sementara) dan
                                        STP (Surat Tugas Pengujian) Oleh Petugas Pelayanan Teknik</button>

                                    @break
                                    @case(3)
                                    <button class="btn btn-sm btn-warning">Penyerahan Sampel, LHUS dan STP oleh petugas
                                        pelayanan teknik ke laboratorium</button>

                                    @break
                                    @case(4)
                                    <button class="btn btn-sm btn-warning">Verifikasi oleh admin penyelia data
                                        permohonan dan sampel sudah diterima oleh laboratorium</button>

                                    @break
                                    @case(5)
                                    <button class="btn btn-sm btn-warning">Analisis sampel oleh laboratorium</button>

                                    @break
                                    @case(6)
                                    <button class="btn btn-sm btn-warning">Verifikasi LHUS dan penyerahan kepada petugas
                                        pelayanan teknik</button>

                                    @break
                                    @case(7)
                                    <button class="btn btn-sm btn-warning">Proses pembuatan LHU oleh petugas pelayanan
                                        teknik</button>

                                    @break
                                    @case(8)
                                    <button class="btn btn-sm btn-warning">Sampel Selesai Diuji</button>

                                    @break
                                    @case(9)
                                    <button class="btn btn-sm btn-warning">Menunggu Pengambilan LHU dan
                                        Pembayaran</button>

                                    @break

                                    @default
                                    <button class="btn btn-sm btn-info">Selesai Pengambilan LHU dan Pembayaran</button>

                                    @endswitch
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5>Data Detail Jenis Pengujian</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped dataTable no-footer text-center"
                        role="grid" aria-describedby="myTable_info">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Nama Detail Jenis Pengujian</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permohonan->detail_permohonan as $d)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->detail_jenis_pengujian->nama}}</td>
                                <td>{{$d->detail_jenis_pengujian->harga}}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="2"><b>Total</b></td>
                                <td><b>Rp.{{$permohonan->detail_permohonan->sum('harga')}}</b></td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
    @include('layouts.verif')
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
@endsection
