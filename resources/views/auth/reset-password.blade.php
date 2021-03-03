@extends('../layouts/app-v1')

@section('title', 'Reset Password')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <img src="{{ asset('icon.png') }}" alt="icon-brand" id="icon-brand">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">{{__('You are only one step a way from your new password, recover your password now.')}}</p>

      @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
      @endif

      <form action="{{ route('password.update') }}" method="post">
        @csrf
        @method('POST')

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="input-group mb-3">
          <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        @error('email')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>    
        @enderror

        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        @error('password')
        <div class="alert alert-danger mt-2">
            <strong>{{ $message }}</strong>
        </div>
        @enderror

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">{{__('Change password')}}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="{{ route('login') }}">{{__('Sign in')}}</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
@endsection