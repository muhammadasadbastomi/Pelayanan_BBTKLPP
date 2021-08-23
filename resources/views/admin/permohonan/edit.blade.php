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
            <form class="m-t-40" action="{{route('admin.permohonan.update',$permohonan->id)}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <input type="hidden" name="status" value="1">
                    <div class="form-group m-b-40">
                        <label for="input1">Tanggal Terima Sampel</label>
                        <span class="bar"></span>
                        <input type="date" name="tanggal_jam_terima" class="form-control" required>
                    </div>
                    <div class="form-group m-b-40">
                        <label for="input1">Tanggal Sampling</label>
                        <span class="bar"></span>
                        {{-- <input type="text" class="form-control" placeholder="Date Of Birth" id="dob">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                    </div> --}}
                        <input type="date" name="tanggal_jam_sampling" class="form-control" required>
                    </div>
                    <div class="form-group m-b-40">
                        <label for="input1">Status Kemampuan Personel</label>
                        <span class="bar"></span>
                        <select name="kemampuan_personel" id="" class="form-control" required>
                            <option value="">Pilih Status Kemampuan Personel</option>
                            <option value="Mampu">Mampu</option>
                            <option value="Tidak Mampu">Tidak Mampu</option>
                        </select>
                    </div>
                    <div class="form-group m-b-40">
                        <label for="input1">Status Kondisi Sampel</label>
                        <span class="bar"></span>
                        <select name="status_kondisi" id="" class="form-control" required>
                            <option value="">Pilih Status Kondisi</option>
                            <option value="Baik">Baik</option>
                            <option value="Tidak Baik">Tidak Baik</option>
                        </select>
                    </div>
                    <div class="form-group m-b-40">
                        <label for="input1">Status Beban Kerja</label>
                        <span class="bar"></span>
                        <select name="status_beban_kerja" id="" class="form-control" required>
                            <option value="">Pilih Beban Kerja</option>
                            <option value="Overload">Overload</option>
                            <option value="Tidak Overload">Tidak Overload</option>
                        </select>
                    </div>
                    <div class="form-group m-b-40">
                        <label for="input1">Status Kondisi Peralatan</label>
                        <span class="bar"></span>
                        <select name="status_kondisi_peralatan" id="" class="form-control" required>
                            <option value="">Pilih Kondisi Peralatan</option>
                            <option value="Overload">Overload</option>
                            <option value="Tidak Overload">Tidak Overload</option>
                        </select>
                    </div>
                    <div class="form-group m-b-40">
                        <label for="input1">Status Kondisi Peralatan</label>
                        <span class="bar"></span>
                        <select name="status_kesesuaian_metode" id="" class="form-control" required>
                            <option value="">Pilih Kesesuaian Metode</option>
                            <option value="Sesuai">Sesuai</option>
                            <option value="Tidak Sesuai">Tidak Sesuai</option>
                        </select>
                    </div>
                    <div class="form-group m-b-40">
                        <label for="input1">Status Terima</label>
                        <span class="bar"></span>
                        <select name="status_terima" id="" class="form-control" required>
                            <option value="">Pilih Status Terima</option>
                            <option value="1">Dapat Dilayani</option>
                            <option value="0">Tidak Dapat Dilayani</option>
                        </select>
                    </div>

                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.permohonan.index')}}" class="btn btn-danger  m-l-15"><i
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