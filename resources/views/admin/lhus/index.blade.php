@extends('layouts.main')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Data LHUS</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Data LHUS</li>
            </ol>
            <a href="{{Route('admin.lhus.create',$permohonan->id)}}" class="btn btn-info d-none d-lg-block m-l-15"><i
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
                                <th>Parameter</th>
                                <th>Satuan</th>
                                <th colspan="5">Hasil</th>
                                <th>Tanggal Pengujian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lhus as $d)

                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->detail_stp->detail_jenis_pengujian->nama}}
                                    ({{$d->detail_stp->detail_jenis_pengujian->kode}})</td>
                                <td>{{$d->detail_stp->detail_jenis_pengujian->satuan}}</td>
                                <td width="5%">{{$d->hasil1}}</td>
                                <td width="5%">{{$d->hasil2}}</td>
                                <td width="5%">{{$d->hasil3}}</td>
                                <td width="5%">{{$d->hasil4}}</td>
                                <td width="5%">{{$d->hasil5}}</td>
                                <td width="5%">{{carbon\carbon::parse($d->tanggal_uji)->translatedFormat('d F Y')}}</td>
                                <td>
                                    <button type="button" data-route="{{Route('admin.lhus.destroy',$d->id)}}"
                                        class="btn btn-danger m-l-15 delete" data-toggle="modal"
                                        data-target="#exampleModal"><i class="fa fa-trash"></i> Hapus
                                    </button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>

            </div>
            <div class="card-footer ">
                <a href="{{Route('admin.permohonan.show',$permohonan->id)}}"
                    class="btn btn-block btn-primary  m-l-15"><i class="fa fa-exit"></i>
                    Kembali</a>
            </div>
        </div>
    </div>
    @include('layouts.delete')
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
@endsection