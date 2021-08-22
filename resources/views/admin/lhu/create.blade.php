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
                <li class="breadcrumb-item ">Data LHUS</li>
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
            <form class="m-t-40" action="{{route('admin.lhu.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group m-b-40">
                                <label for="input1">Parameter</label>
                                <span class="bar"></span>
                                <select name="detail_stp_id" id="" class="form-control" required>
                                    @foreach ($permohonan->stp->detail_stp as $d)
                                    <option value="{{$d->id}}">{{$d->detail_jenis_pengujian->kode}} -
                                        {{$d->detail_jenis_pengujian->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group m-b-40">
                                <label for="input1">Nama Personel Yang Dihubungi</label>
                                <span class="bar"></span>
                                <input type="text" name="nama_kontak" class="form-control" id="input1" required>
                            </div>
                            <div class="form-group m-b-40">
                                <label for="input1">Nomor Sampel</label>
                                <span class="bar"></span>
                                <input type="text" name="no_sampel" class="form-control" id="input1" required>
                            </div>
                            <div class="form-group m-b-40">
                                <label for="input1">LOD</label>
                                <span class="bar"></span>
                                <input type="text" name="lod" class="form-control" id="input1" required>
                            </div>
                            <div class="form-group m-b-40">
                                <label for="input1">Hasil Pengujian</label>
                                <span class="bar"></span>
                                <input type="text" name="hasil_pengujian" class="form-control" id="input1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group m-b-40">
                                <label for="input1">Kelas I</label>
                                <span class="bar"></span>
                                <input type="text" name="hasil1" class="form-control" id="input1" required>
                            </div>
                            <div class="form-group m-b-40">
                                <label for="input1">Kelas II</label>
                                <span class="bar"></span>
                                <input type="text" name="hasil2" class="form-control" id="input1">
                            </div>
                            <div class="form-group m-b-40">
                                <label for="input1">Kelas III</label>
                                <span class="bar"></span>
                                <input type="text" name="hasil3" class="form-control" id="input1">
                            </div>
                            <div class="form-group m-b-40">
                                <label for="input1">Kelas IV</label>
                                <span class="bar"></span>
                                <input type="text" name="hasil4" class="form-control" id="input1">
                            </div>
                            <div class="form-group m-b-40">
                                <label for="input1">Metode Spesifikasi</label>
                                <span class="bar"></span>
                                <input type="text" name="metode_spesifikasi" class="form-control" id="input1">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.lhu.index',$permohonan->id)}}" class="btn btn-danger  m-l-15"><i
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