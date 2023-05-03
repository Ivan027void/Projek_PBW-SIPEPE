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
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div> <main>
    <br>
    <div class="container text-white">
     
      <br>
      <table class="table w-100 text-white text-center">
        <tr style="background: #60A5FA;">
          <th>No</th>
          <th>Penelitian/Judul</th>
          <th>Dosen</th>
          <th>Tanggal Pengajuan</th>
          <th>Status</th>
        </tr>
        <tr class="bg-white text-dark">
          <td>1</td>
          <td><a href = "detailMahasiswa">E-Commerce </a></td>
          <td>Bapak Alim Hisbullah</td>
          <td>10.00</td>
          <td><i class="fas fa-check-circle text-info"></i></td>
        </tr>
        <tr class="text-dark" style="background: #D4E8FF;">
          <td>2</td>
          <td>Website Travel</td>
          <td>Ibu Dalila Husna Yunardi</td>
          <td>12.00</td>
          
          <td><i class="fas fa-check-circle text-info"></i></td>
        </tr>
        <tr class="bg-white text-dark">
          <td>3</td>
          <td>Website Alumni</td>
          <td>Ibu Maharini</td>
          <td>15.00</td>
         
          <td>Unfinished</td>

        </tr>
      </table>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </main>
</div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
