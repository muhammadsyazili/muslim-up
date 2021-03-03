@extends('../layouts/app-v1')

@section('title', 'Sign Up')

@section('content')  
<div class="register-box">
  <div class="register-logo">
    <img src="{{ asset('icon.png') }}" alt="icon-brand" id="icon-brand">
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">{{__('Sign up a new membership')}}</p>

      <form action="{{ route('register') }}" method="post">
        @csrf
        @method('POST')

        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-at"></span>
            </div>
          </div>
          <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}" name="username">
        </div>

        @error('username')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>    
        @enderror

        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" name="email">
        </div>

        @error('email')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>    
        @enderror

        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" value="{{ old('name') }}" name="name">
        </div>

        @error('name')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>    
        @enderror

        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-birthday-cake"></span>
            </div>
          </div>
          <input type="date" class="form-control @error('birthday') is-invalid @enderror" placeholder="Birthday" value="{{ old('birthday') }}" name="birthday">
        </div>

        @error('birthday')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>    
        @enderror

        <div class="form-group clearfix">
          <div class="icheck-primary d-inline">
            <input type="radio" id="gender-male" name="gender" value="male" checked>
            <label for="gender-male">
              {{__('Male')}}
            </label>
          </div>
          <div class="icheck-primary d-inline">
            <input type="radio" id="gender-female" name="gender" value="female">
            <label for="gender-female">
              {{__('Female')}}
            </label>
          </div>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
        </div>

        @error('password')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>    
        @enderror

        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation">
        </div>

        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="yes">
              <label for="agreeTerms">
                {{__('I agree to the')}} <a href="/term">{{__('terms')}}</a>
              </label>
            </div>

            @error('terms')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>    
            @enderror
          </div>
          <!-- /.col -->

          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">{{__('Sign Up')}}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="{{ route('login') }}" class="text-center">{{__('I already have a membership')}}</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
@endsection