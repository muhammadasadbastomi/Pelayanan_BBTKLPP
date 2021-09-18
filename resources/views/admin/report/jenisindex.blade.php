@extends('layouts.main')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Cetak Permohonan</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item ">Permohonan Berdasarkan Jenis Sampel</li>
                <li class="breadcrumb-item active">Filter</li>
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
            <form target="_blank" class="floating-labels m-t-40" action="{{route('admin.report.permohonanjenis')}}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="form-group m-b-40">
                        <label for="input1">Pilih Jenis Sampel</label>
                        <span class="bar"></span>
                        <select name="jenis_pengujian_id" id="" class="form-control" required>
                            @foreach ($data as $d)
                            <option value="{{$d->id}}">{{$d->nama_metode}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.index')}}" class="btn btn-danger  m-l-15"><i class="fa fa-arrow-left"></i>
                        Batal</a>
                    <button type="submit" class="btn btn-info  m-l-15"><i class="fa fa-save"></i>
                        Cetak</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
@endsection
