@extends('layouts.pemohon')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Data Detail Permohonan</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Data Detail Permohonan</li>
            </ol>
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
            @if ($permohonan->status == 1)

            <div class="card-header" style="backround-colo:red !important">
                <p>Silahkan Menyerahkan Sampel Pada Hari
                    {{carbon\carbon::parse($permohonan->tanggal_jam_terima)->translatedFormat('l, d F Y')}} </p>
            </div>
            @endif
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
                                    @default

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
                <div class="row">
                    <div class="col-md-6">
                        <h5>Data Detail Jenis Pengujian</h5>
                    </div>
                    @if($permohonan->status == 0)
                    <div class="col-md-6 text-right">
                        <a href="{{Route('pemohon.permohonan-detail.create',$permohonan->id)}}"
                            class="btn btn-info  m-l-15"><i class="fa fa-plus-circle"></i> Tambah
                            Data</a>
                    </div>
                    @endif
                </div>
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
                                @if($permohonan->status == 0)
                                <th>Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permohonan->detail_permohonan as $d)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->detail_jenis_pengujian->nama}}</td>
                                <td>Rp.{{$d->detail_jenis_pengujian->harga}}</td>
                                @if($permohonan->status == 0)
                                <td>
                                    <button type="button"
                                        data-route="{{Route('pemohon.permohonan-detail.destroy',$d->id)}}"
                                        class="btn btn-sm btn-danger m-l-15 delete" data-toggle="modal"
                                        data-target="#exampleModal"><i class="fa fa-trash"></i> Hapus
                                    </button>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                            @if($permohonan->detail_permohonan->count() > 0)
                            <tr>
                                <td colspan="2"><b>Total</b></td>
                                <td><b>Rp.{{$permohonan->detail_permohonan->sum('harga')}}</b></td>
                                @if($permohonan->status == 0)
                                <td>-</td>
                                @endif
                            </tr>
                            @endif

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
    @include('layouts.delete')
</div>

<!-- ============================================================== -->
<!-- End PAge Content -->
@endsection