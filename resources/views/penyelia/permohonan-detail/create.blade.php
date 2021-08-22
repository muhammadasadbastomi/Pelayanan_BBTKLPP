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
                <li class="breadcrumb-item ">Data Detail Permohonan</li>
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
            <form class=" m-t-40" action="{{route('pemohon.permohonan-detail.store')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <input type="hidden" value="{{$permohonan->id}}" name="permohonan_id" class="" required>
                    <div class="form-group m-b-40">
                        <label for="input1">Nama Detail Jenis Pengujian</label>
                        <span class="bar"></span>
                        <select name="detail_jenis_pengujian_id" id="" class="form-control" required>
                            @foreach ($jenisPengujian->detail_jenis_pengujian as $d)
                            <option value="{{$d->id}}">{{$d->nama}} - Rp.{{$d->harga}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="card-footer text-right">
                        <a href="{{Route('pemohon.permohonan-detail.index',$permohonan->id)}}"
                            class="btn btn-danger  m-l-15"><i class="fa fa-arrow-left"></i>
                            Batal</a>
                        <button type="submit" class="btn btn-info  m-l-15"><i class="fa fa-save"></i>
                            Simpan</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
@endsection