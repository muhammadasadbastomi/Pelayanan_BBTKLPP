@extends('layouts.main')
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
                <li class="breadcrumb-item ">Data Permohonan</li>
                <li class="breadcrumb-item active">Detail</li>
            </ol>
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
                                <td><b>Rp.{{$d->sum('harga')}}</b></td>
                                <td>-</td>
                            </tr>

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