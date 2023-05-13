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
                                </div>
                                <hr>
                                <div>
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">Log</th>
                                                <th scope="col">Lampiran</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Komentar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!$penelitian->dokumen)
                                            <tr>
                                                <td colspan="4">Tidak ada data dokumen.</td>
                                            </tr>
                                            @elseif($penelitian->dokumen->isEmpty())
                                            <tr>
                                                <td colspan="4">Tidak ada data dokumen.</td>
                                            </tr>
                                            @else
                                            @foreach($penelitian->dokumen as $dokumen)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $dokumen->nama }}</td>
                                                <td>{{ $dokumen->status }}</td>
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
