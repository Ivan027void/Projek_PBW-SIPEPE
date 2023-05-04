@extends('layouts.app')

@section('content')
<div>
  <div class="ml-3 user-panel flex ">
    <table>
    <tr class="">
        <td>Judul </td>
        <td>:</td>
        <td>E - Commerce</td>
    </tr>

    <tr>
      <td>Mahasiswa</td>
      <td>:</td>
      <td>Ivan</td>
    </tr>

    <tr>
        <td>Status </td>
        <td>:</td>
        <td>Progress</td>
    </tr>

    <tr>
      <td>target </td>
      <td>:</td>
      <td>Sekolah menengah atas</td>
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
        <tr>
          <th scope="row">1</th>
          <td>-</td>
          <td>revisi</td>
          <td>-</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>-</td>
          <td>Ulang</td>
          <td>-</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>-</td>
          <td>Revisi</td>
          <td>-</td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>-</td>
          <td>selesai</td>
          <td>-</td>
        </tr>
      </tbody>
    </table>
  </div>


</div>    














@endsection