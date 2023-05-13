@extends('layouts.app')

@section('content')
<div>
  <div class="ml-3 user-panel flex ">
    <table>
    <tr class="">
        <td>Judul </td>
        <td>:</td>
        <td>{{ $penelitian->judul_penelitian }}</td>
    </tr>

    <tr>
      <td>Dosen</td>
      <td>:</td>
      <td>{{ $penelitian->dosen->name }}</td>
    </tr>

    <tr>
        <td>Status </td>
        <td>:</td>
        <td>{{ $penelitian->status_persetujuan }}</td>
    </tr>

    <tr>
      <td>Deskripsi </td>
      <td>:</td>
      <td>{{ $penelitian->deskripsi }}</td>
    </tr>
    <tr>
      <td>Tgl Pengajuan </td>
      <td>:</td>
      <td>{{ $penelitian->created_at->format('d M Y') }}</td>
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
                    <td>{{ $dokumen->komentar }}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
    </table>
  </div>


</div>    
@endsection
