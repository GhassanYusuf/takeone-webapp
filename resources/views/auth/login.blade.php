@extends('layouts.app')

@section('content')
<body class="hold-transition login-page bg-secondary">
  
    <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-danger bg-dark">
        <div class="card-header text-center">
          <a href="{{ URL('/login') }}" class="h1"><img class="pb-1" src="dist/img/takeoneLogo.png"></a>
        </div>
        <div class="card-body">
  
            <p class="login-box-msg">
                Don't use TAKEONE yet ?
                <b>
                    <a class="text-warning" href="{{ URL('/register') }}"> Join Now</a>
                </b>
            </p>
  
          <form action="{{ URL('login') }}" method="post">
            @csrf
            <div class="input-group mb-3">
              <input id="email" type="email" class="form-control" placeholder="Email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="icheck-danger">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label for="remember">
                    {{ __('Remember Me') }}
                  </label>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <div class="row">
                <div class="col-sm-8">
                    @if (Route::has('password.request'))
                        <a class="btn btn-outline-danger btn-block mt-2" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-danger btn-block mt-2">{{ __('Login') }}</button>
                </div>
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box -->
  
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
  
</body>
@endsection
