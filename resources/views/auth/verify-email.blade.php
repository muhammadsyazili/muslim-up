@extends('../layouts/app-v1')

@section('title', 'Verify Email')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <h1><b>{{__('Muslim')}}</b> {{__('Up')}}</h1>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg text-left">{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}</p>

      @if (session('status') == 'verification-link-sent')
          <div class="alert alert-success" role="alert">
              {{ __('A new verification link has been sent to the email address you provided during registration.') }}
          </div>
      @endif

      <form method="POST" action="{{ route('verification.send') }}">
          @csrf
          @method('POST')

          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-link">{{ __('Resend Verification Email') }}</button>
            </div>
            <!-- /.col -->
          </div>
      </form>

      <form method="POST" action="{{ route('logout') }}">
          @csrf
          @method('POST')

          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-link">{{ __('Sign out') }}</button>
            </div>
            <!-- /.col -->
          </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
@endsection