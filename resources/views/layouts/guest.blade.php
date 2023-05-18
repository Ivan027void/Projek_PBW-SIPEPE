<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
</head>
<body class="hold-transition " style="height: 1000px">
<div class="d-flex" style="height: 1000px">
    <div class ="w-50 d-flex align-items-center justify-content-center" style = "background-image: url('{{ asset('images/Fix.png') }}'); background-repeat: no-repeat; background-size: 100% 100%;">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card">
                @yield('content')
            </div>
        </div>

    </div>
    <div class ="w-50 d-flex align-items-center justify-content-center" style ="background-color: #8D99AE">
         <img src = "{{ asset('images/6.png') }}"width="700" height="700">
        </div>
</div>
<!-- /.login-box -->

@vite('resources/js/app.js')
<!-- Bootstrap 4 -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}" defer></script>
</body>
</html>