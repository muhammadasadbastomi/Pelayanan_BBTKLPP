@extends('layouts.pemohon')
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
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Data Permohonan</li>
            </ol>
            <a href="{{Route('pemohon.permohonan.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i
                    class="fa fa-plus-circle"></i> Tambah
                Data</a>
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
                    <table id="myTable" class="table table-bordered table-striped dataTable no-footer text-center"
                        role="grid" aria-describedby="myTable_info">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Nama Jenis Sampel</th>
                                <th>Jumlah Sampel</th>
                                <th>Berat Sampel</th>
                                <th>Deskripsi Sampel</th>
                                <th>Bentuk Sampel</th>
                                <th>Wadah Sampel</th>
                                <th>Sifat Sampel</th>
                                <th>Status Permohonan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)

                            <tr @if ($d->tanggal_jam_terima && $d->status == 1)
                                style="background-color:rgba(222, 255, 43, 0.16);"
                                @elseif($d->permohonan_detail == null && $d->status == 0)

                                style="background-color:rgba(255, 0, 0, 0.16)"
                                @endif
                                >
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->jenis_pengujian->nama_metode}}</td>
                                <td>{{$d->jumlah}}</td>
                                <td>{{$d->berat}}</td>
                                <td>{{$d->deskripsi}}</td>
                                <td>{{$d->bentuk}}</td>
                                <td>{{$d->wadah}}</td>
                                <td>{{$d->sifat}}</td>
                                <td>
                                    @if($d->detail_permohonan->count() == 0)
                                    <button class="btn btn-sm btn-warning">Menunggu Pengisian Detail Permohonan</button>
                                    @else
                                    @switch($d->status)
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
                                    @endif
                                </td>
                                <td>
                                    @if ($d->status == 0)

                                    <a href="{{Route('pemohon.permohonan.edit',$d->id)}}"
                                        class="btn btn-sm btn-info m-l-15"><i class="fa fa-edit"></i>
                                        Edit</a>
                                    @endif
                                    <a href="{{Route('pemohon.permohonan-detail.index',$d->id)}}"
                                        class="btn btn-sm btn-primary m-l-15"><i class="fa fa-eye"></i>
                                        Detail</a>
                                    @if ($d->status == 0)
                                    <button type="button" data-route="{{Route('pemohon.permohonan.destroy',$d->id)}}"
                                        class="btn btn-sm btn-danger m-l-15 delete" data-toggle="modal"
                                        data-target="#exampleModal"><i class="fa fa-trash"></i> Hapus
                                    </button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>

            </div>
            <div class="card-body">
                <div class="card-title">
                    Keterangan Warna
                </div>
                <table id="myTable" class="table " role="grid" aria-describedby="myTable_info">
                    <tbody>
                        <tr>
                            <td width="5%">Hijau</td>
                            <td width="3px">:</td>
                            <td>Penyerahan Sampel Kepada Petugas Teknik</td>
                        </tr>
                        <tr>
                            <td width="5%">Merah</td>
                            <td width="3px">:</td>
                            <td>Wajib Mengisi Detail Permohonan</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>

    </div>
    @include('layouts.delete')
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
@endsection