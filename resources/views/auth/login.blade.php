@extends('layouts.guest')

@section('content')
    <div class="card-body login-card-body">
        <p class="login-box-msg text-xl">{{ __('Login') }}</p>

        <form action="{{ route('login') }}" method="post">
            @csrf

            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email') }}" required autofocus>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                @error('email')
                <span class="error invalid-feedback">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                @error('password')
                <span class="error invalid-feedback">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 text-sm">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end text-sm">
    @if (Route::has('password.request'))
      <a href="{{ route('password.request') }}" class="ms-3">{{ __('Forgot Password?') }}</a>
    @endif
  </div>
            </div>
        </form>

    <!-- /.col -->
    <div class="d-grid gap-2 col-16 mx-auto mt-2">
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                </div>
                <!-- /.col -->

        <div class="text-center col-6 mx-auto mb-2 mt-2">
            <a class="text-sm " href="{{ route('register') }}">
                {{ __('Register now!') }}
            </a>
        </div>

    </div>
    <!-- /.login-card-body -->
@endsection