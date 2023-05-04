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
                            <div class="mb-3">
                                <label for="Namaform" class="form-control">Nama    :</label>
                                <input type="text" class="form-control" id="Emailform">
                            </div>
                            <div class="mb-3">
                                <label for="NPMform" class="form-control">NPM       :</label>
                                <input type="text" class="form-control" id="NPMform">
                            </div>
                            <div class="mb-3">
                                <label for="Pilihdos" class="form-select">Pilih Dosen    :</label>
                                <select class="form-select" aria-label="Selectexample">
                                    <option selected>Pilih Dosen</option>
                                    <option value="1"></option>
                                    <option value="2"></option>
                                </select>
                            <div class=" mb-3">
                                <label for="Judulform" class="form-control">Judul   :</label>
                                <textarea class="form-control" id="Judulform" rows="3"></textarea>
                            </div>
                            <div class=" mb-3">
                                <label for="Deskripsiform" class="form-control">Deskripsi   :</label>
                                <textarea class="form-control" id="Deskripsiform" rows="3"></textarea>
                            </div> 
                            <div class="text-center">
                                <button type="button" class="btn btn-secondary">Upload Proposal</button>
                            </div>
                            <div class="mt-2 text-center">
                                <button type="button" class="btn btn-secondary"><a href = "home"style="color: white;"> Ajukan </a> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection