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
                <li class="breadcrumb-item active">Data Permohonan</li>
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
                    <table id="myTable" class="table table-bordered table-striped dataTable no-footer text-center"
                        role="grid" aria-describedby="myTable_info">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Nama Jenis Sampel</th>
                                <th>Jumlah Sampel</th>
                                <th>Berat Sampel</th>
                                <th>Deskripsi Sampel</th>
                                <th>Bentuk Sampel</th>
                                <th>Wadah Sampel</th>
                                <th>Sifat Sampel</th>
                                <th>Status Permohonan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)

                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->jenis_pengujian->nama_metode}}</td>
                                <td>{{$d->jumlah}}</td>
                                <td>{{$d->berat}}</td>
                                <td>{{$d->deskripsi}}</td>
                                <td>{{$d->bentuk}}</td>
                                <td>{{$d->wadah}}</td>
                                <td>{{$d->sifat}}</td>
                                <td>

                                    @switch($d->status)
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
                                <td>
                                    {{-- <a href="{{Route('admin.permohonan.edit',$d->id)}}"
                                    class="btn btn-sm btn-info m-l-15"><i class="fa fa-edit"></i>
                                    Edit</a> --}}
                                    @switch($d->status)
                                    @case(0)
                                    <a href="{{Route('admin.permohonan.edit',$d->id)}}"
                                        class="btn btn-sm btn-primary m-l-15"><i class="fa fa-check"></i>
                                        Verifikasi</a>
                                    @break
                                    @case(1)
                                    <a href="{{Route('admin.permohonan.show',$d->id)}}"
                                        class="btn btn-sm btn-primary m-l-15"><i class="fa fa-eye"></i> Detail
                                    </a>
                                    @break
                                    @case(2)
                                    <button class="btn btn-sm btn-warning">Buat LHUS</button>
                                    <button class="btn btn-sm btn-warning">Buat STP</button>
                                    @break
                                    @default

                                    @endswitch

                                    {{-- <button type="button" data-route="{{Route('admin.permohonan.destroy',$d->id)}}"
                                    class="btn btn-sm btn-danger m-l-15 delete" data-toggle="modal"
                                    data-target="#exampleModal"><i class="fa fa-trash"></i> Hapus
                                    </button> --}}
                                </td>
                            </tr>
                            @endforeach

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