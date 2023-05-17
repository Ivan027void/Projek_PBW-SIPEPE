@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Penelitian') }}</h1>
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
                            <div>
                                <div class="ml-3 user-panel flex">
                                    <table>
                                        <tr>
                                            <td>Judul</td>
                                            <td>:</td>
                                            <td>{{ $penelitian->judul_penelitian }}</td>
                                        </tr>
                                        <tr>
                                            <td>Dosen</td>
                                            <td>:</td>
                                            <td>{{ $penelitian->dosen->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>:</td>
                                            <td>{{ $penelitian->status_persetujuan }}</td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi</td>
                                            <td>:</td>
                                            <td>{{ $penelitian->deskripsi }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tgl Pengajuan</td>
                                            <td>:</td>
                                            <td>{{ $penelitian->tanggal_pengajuan }}</td>
                                        </tr>
                                    </table>

                                    <div class="text-center mt-3">
                                      <a href="{{ route('dokumen.create', ['id_penelitian' => $penelitian->id]) }}" class="btn btn-primary">{{ __('Upload Dokumen') }}</a>
                                    </div>
                                </div>
                                <hr>
                                <h3>Dokumen</h3>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama File</th>
                                            <th scope="col">Tanggal di Unggah</th>
                                            <th scope="col">Komentar</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if(!isset($dokumen) || $dokumen->isEmpty())
                                            <tr>
                                                <td colspan="4">Tidak ada dokumen yang terkait dengan penelitian ini.</td>
                                            </tr>
                                        @else
                                            @foreach($dokumen as $index => $doc)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td><a href="{{ asset('storage/' . $doc->path_file) }}">{{ $doc->nama_file }}</a></td>
                                                    <td>{{ $doc->created_at }}</td>
                                                    <td>
                                                        @if ($doc->komentar)
                                                            <p>{{ $doc->komentar }}</p>
                                                            <small class="text-muted">{{ $doc->tanggal_komentar }}</small>
                                                        @else
                                                            -
                                                        @endif
                                                    </td>
                                                    <td>
                                                    <form action="{{ route('dokumen.delete', ['id' => $doc->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this document?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                  </table>
                              </div>
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



                


