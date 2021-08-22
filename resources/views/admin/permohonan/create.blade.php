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
            <form class=" m-t-40" action="{{route('pemohon.permohonan.store')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" value="{{Auth::id()}}" name="user_id" class="" required>
                            <div class="form-group m-b-40">
                                <label for="input1">Nama Jenis Sampel</label>
                                <span class="bar"></span>
                                <select name="jenis_pengujian_id" id="" class="form-control" required>
                                    @foreach ($jenisSample as $d)
                                    <option value="{{$d->id}}">{{$d->nama_metode}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group m-b-40">
                                <label for="input1">Jumlah Sampel</label>
                                <span class="bar"></span>
                                <input type="text" name="jumlah" class="form-control" id="input1" required>
                            </div>
                            <div class="form-group m-b-40">
                                <label for="input1">Berat Sampel</label>
                                <span class="bar"></span>
                                <input type="text" name="berat" class="form-control" id="input1" required>
                            </div>
                            <div class="form-group m-b-40">
                                <label for="input1">Deskripsi Sampel</label>
                                <span class="bar"></span>
                                <input type="text" name="deskripsi" class="form-control" id="input1" required>
                            </div>
                            <div class="form-group m-b-40">
                                <label for="input1">Bentuk Sampel</label>
                                <span class="bar"></span>
                                <input type="text" name="bentuk" class="form-control" id="input1" required>
                            </div>
                            <div class="form-group m-b-40">
                                <label for="input1">Wadah Sampel</label>
                                <span class="bar"></span>
                                <input type="text" name="wadah" class="form-control" id="input1" required>
                            </div>
                            <div class="form-group m-b-40">
                                <label for="input1">Sifat Sampel</label>
                                <span class="bar"></span>
                                <input type="text" name="sifat" class="form-control" id="input1" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group m-b-40">
                                {{-- <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' name="tanggal_jam_terima" class="form-control" required />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div> --}}
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
                        </div>

                    </div>
                    <div class="card-footer text-right">
                        <a href="{{Route('pemohon.permohonan.index')}}" class="btn btn-danger  m-l-15"><i
                                class="fa fa-arrow-left"></i>
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