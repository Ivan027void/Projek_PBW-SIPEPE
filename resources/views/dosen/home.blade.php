@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Dashboard') }}</h1>
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
                            <table class="table w-100 text-black text-center" border='1px black'>
                                <thead>
                                    <tr style="background: #60A5FA;">
                                    <th>No</th>
                                        <th>Judul Penelitian</th>
                                        <th>Mahasiswa</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Status Persetujuan</th>
                                        <th>Tanggal Persetujuan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($penelitian->isEmpty())
                                  <tr>
                                    <td colspan="7">Tidak ada data penelitian.</td>
                                  </tr>
                                  @else
                                  @foreach($penelitian as $pen)
                                  <tr>
                                  <td>{{ $key + 1 }}</td>
                                            <td>{{ $p->judul_penelitian }}</td>
                                            <td>{{ $p->mahasiswa->name }}</td>
                                            <td>{{ $p->tanggal_pengajuan->format('d/m/Y') }}</td>
                                            <td>{{ $p->status_persetujuan }}</td>
                                            <td>{{ $p->tanggal_persetujuan ? $p->tanggal_persetujuan->format('d/m/Y') : '-' }}</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
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
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
