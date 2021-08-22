@extends('layouts.main')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Data STP</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item ">Data STP</li>
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
            <form class="m-t-40" action="{{route('admin.stp.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <input type="hidden" value="{{$stp->id}}" name="stp_id" required>
                    <div class="form-group m-b-40">
                        <label for="input1">Nomor Sampel</label>
                        <span class="bar"></span>
                        <input type="text" name="no_sampel" class="form-control" id="input1" required>
                    </div>
                    <div class="form-group m-b-40">
                        <label for="input1">Nama Parameter</label>
                        <span class="bar"></span>
                        <select name="detail_jenis_pengujian_id" id="" class="form-control" required>
                            @foreach ($detailJenisPengujian as $d)
                            <option value="{{$d->id}}">{{$d->kode}} - {{$d->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group m-b-40">
                        <label for="input1">Petugas Penyelia</label>
                        <span class="bar"></span>
                        <select name="user_id" id="" class="form-control" required>
                            @foreach ($penyelia as $d)
                            <option value="{{$d->id}}">{{$d->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.stp.index',$stp->permohonan_id)}}" class="btn btn-danger  m-l-15"><i
                            class="fa fa-arrow-left"></i>
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