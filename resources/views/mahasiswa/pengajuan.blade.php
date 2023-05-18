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
        <button type="submit" class="btn btn-secondary" id="ajukanBtn">Ajukan</button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="notificationModalLabel">Notifikasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Berhasil diajukan.
                </div>
            </div>
        </div>
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
    <!-- Masukkan script JavaScript Bootstrap dan jQuery di sini -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById("ajukanBtn").addEventListener("click", function() {
        $('#notificationModal').modal('show');
        setTimeout(function() {
            $('#notificationModal').modal('hide');
        }, 3000); // Menghilangkan modal notifikasi setelah 2 detik (2000 milidetik)
    });
    </script>
@endsection