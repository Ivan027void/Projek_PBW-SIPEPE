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
                                            <td>Mahasiswa</td>
                                            <td>:</td>
                                            <td>{{ $penelitian->mahasiswa->name }}</td>
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
                                        <tr>
                                            <td>Tgl Persetujuan</td>
                                            <td>:</td>
                                            <td>{{ $penelitian->tanggal_persetujuan }}</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="mt-3">
                                    <form method="POST" action="{{ route('penelitian.update', $penelitian->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="status_persetujuan">Status Persetujuan:</label>
                                            <select class="form-control" id="status_persetujuan" name="status_persetujuan">
                                                <option value="pending" {{ $penelitian->status_persetujuan == 'pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="terima" {{ $penelitian->status_persetujuan == 'terima' ? 'selected' : '' }}>Terima</option>
                                                <option value="tolak" {{ $penelitian->status_persetujuan == 'tolak' ? 'selected' : '' }}>Tolak</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">{{ __('Update Status Persetujuan') }}</button>
                                    </form>
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
                                            <th scope="col">aksi</th>
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
                                                        <form action="{{ route('penelitian-dosen.store') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="dokumen_id" value="{{ $doc->id }}">
                                                            <textarea name="komentar" rows="2" cols="30" placeholder="Masukkan komentar..."></textarea>
                                                            <button type="submit">Kirim</button>
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



                


