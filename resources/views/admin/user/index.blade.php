@extends('layouts.main')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Data User</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Data User</li>
            </ol>
            <a href="{{Route('admin.user.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i
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
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Username</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>No HP</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)

                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->nama}}</td>
                                <td>{{$d->nip}}</td>
                                <td>{{$d->username}}</td>
                                <td>{{$d->alamat}}</td>
                                <td>{{$d->jk}}</td>
                                <td>{{$d->no_hp}}</td>
                                <td>
                                    @switch($d->role)
                                    @case(1)
                                    <button class="btn btn btn-sm btn-rounded btn-success">Admin/Petugas Teknik</button>
                                    @break
                                    @case(2)
                                    <button class="btn btn btn-sm btn-rounded btn-primary">Petugas Penyelia</button>

                                    @break
                                    @default
                                    <button class="btn btn btn-sm btn-rounded btn-info">Pemohon</button>

                                    @endswitch
                                </td>
                                <td>
                                    <a href="{{Route('admin.user.edit',$d->id)}}" class="btn btn-info m-l-15"><i
                                            class="fa fa-edit"></i>
                                        Edit</a>
                                    <button type="button" data-route="{{Route('admin.user.destroy',$d->id)}}"
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
        </div>
    </div>
    @include('layouts.delete')
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
@endsection