@extends('../layouts/app-v1')

@section('title', 'Forgot Password')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <h1><b>{{__('Muslim')}}</b> {{__('Up')}}</h1>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">{{__('You forgot your password? Here you can easily retrieve a new password.')}}</p>

      @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
      @endif

      <form action="{{ route('password.email') }}" method="post">
        @csrf
        @method('POST')

        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        @error('email')
        <div class="alert alert-danger mt-2">
            <strong>{{ $message }}</strong>
        </div>
        @enderror

        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">{{__('Request new password')}}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="{{ route('login') }}">{{__('Sign in')}}</a>
      </p>
      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">{{__('Sign up a new membership')}}</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
@endsection