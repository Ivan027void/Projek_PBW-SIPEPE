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
                                    <label for="id_penelitian" class="form-control">ID Penelitian :</label>
                                    <input type="text" class="form-control" id="id_penelitian" name="id_penelitian" value="{{ session('id_penelitian') }}">
                                </div>

                                <div class="text-center">
                                    <label for="dokumen-file" class="btn btn-secondary">Upload Dokumen</label>
                                    <input type="file" id="dokumen-file" accept=".pdf" style="display: none;" onchange="showFileName(this)">
                                    <span id="file-name"></span>
                                </div>

                                <script>
                                    function showFileName(input) {
                                    const fileName = input.files[0].name;
                                    const fileNameSpan = document.getElementById("file-name");
                                    fileNameSpan.innerText = fileName;
                                    }
                                </script>

                                <div class="mt-2 text-center">
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
