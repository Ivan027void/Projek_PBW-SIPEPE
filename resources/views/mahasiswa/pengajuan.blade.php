@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Pengajuan') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('') }}</h5>
                            <form action="{{ route('pengajuan.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="Namaform" class="form-control">Nama :</label>
                                    <input type="text" class="form-control" id="Namaform" name="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="NPMform" class="form-control">NPM :</label>
                                    <input type="text" class="form-control" id="NPMform" name="npm">
                                </div>
                                <div class="mb-3">
                                    <label for="Pilihdos" class="form-select">Pilih Dosen :</label>
                                    <select class="form-select" aria-label="Selectexample" name="dosen_nip">
                                        <option selected>Pilih Dosen</option>
                                        @foreach($dosens as $dosen)
                                            <option value="{{ $dosen->npm }}">{{ $dosen->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class=" mb-3">
                                    <label for="Judulform" class="form-control">Judul :</label>
                                    <textarea class="form-control" id="Judulform" rows="3" name="judul"></textarea>
                                </div>
                                <div class=" mb-3">
                                    <label for="Deskripsiform" class="form-control">Deskripsi :</label>
                                    <textarea class="form-control" id="Deskripsiform" rows="3" name="deskripsi"></textarea>
                                </div> 
                                <div class="mt-2 text-center">
                                    <button type="submit" class="btn btn-secondary">Ajukan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection