@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Upload Dokumen') }}</h1>
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
                            <form action="{{ route('dokumen.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="id_penelitian" class="form-label">ID Penelitian :</label>
                                    <input type="text" class="form-control" id="id_penelitian" name="id_penelitian" value="{{ $id_penelitian }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="dokumen-file" class="form-label">Pilih Dokumen:</label>
                                    <input type="file" class="form-control" id="dokumen-file" name="dokumen" onchange="showFileName(this)">
                                </div>

                                <div class="mb-3">
                                    <label for="nama_file" class="form-label">Nama File:</label>
                                    <input type="text" class="form-control" id="nama_file" name="nama_file" readonly>
                                </div>

                                <script>
                                    function showFileName(input) {
                                        const fileName = input.files[0].name;
                                        const fileNameInput = document.getElementById("nama_file");
                                        fileNameInput.value = fileName;
                                    }
                                </script>


                                <div class="text-center">
                                    <button type="submit" class="btn btn-secondary">Upload</button>
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
