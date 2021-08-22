@extends('layouts.main')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Data Jenis Pengujian</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item ">Data Jenis Pengujian</li>
                <li class="breadcrumb-item active">Tambah</li>
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
            <form class="floating-labels m-t-40" action="{{route('admin.jenis-pengujian-detail.store')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group m-b-40">
                        <input type="text" value="{{$jenis_pengujian->nama_metode}}" class="form-control" id="input1"
                            readonly>
                        <input type="hidden" name="jenis_pengujian_id" value="{{$jenis_pengujian->id}}"
                            class="form-control" id="input1" required>
                        <span class="bar"></span>
                        <label for="input1">Jenis Pengujian</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="text" name="kode" class="form-control" id="input1">
                        <span class="bar"></span>
                        <label for="input1">Kode Detail Jenis Pengujian</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="text" name="nama" class="form-control" id="input1" required>
                        <span class="bar"></span>
                        <label for="input1">Nama Detail Jenis Pengujian</label>
                    </div>
                    <div class="form-group m-b-40">
                        <input type="text" name="harga" class="form-control" id="input1" required>
                        <span class="bar"></span>
                        <label for="input1">Harga</label>
                    </div>

                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.jenis-pengujian-detail.index',$jenis_pengujian->id)}}"
                        class="btn btn-danger  m-l-15"><i class="fa fa-arrow-left"></i>
                        Batal</a>
                    <button type="submit" class="btn btn-info  m-l-15"><i class="fa fa-save"></i>
                        Simpan</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
@endsection