@extends('../layouts/app-v1')

@section('title', 'Sign In')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <img src="{{ asset('icon.png') }}" alt="icon-brand" id="icon-brand">
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
        <p class="login-box-msg">{{__('Sign In')}}</p>

        <form action="{{ route('login') }}" method="post">
            @csrf
            @method('POST')

            <div class="input-group mb-3">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-at"></span>
                    </div>
                </div>
                <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username" value="{{ old('username') }}"/>
            </div>

            @error('username')
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
                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password"/>
            </div>

            @error('password')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>    
            @enderror

            <div class="row">
                <div class="col-12">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember" name="remember"/>
                        <label for="remember">{{__('Remember Me')}}</label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{__('Sign In')}}
                    </button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <p class="mb-1">
            <a href="{{ route('password.request') }}">{{__('I forgot my password')}}</a>
        </p>
        <p class="mb-0">
            <a href="{{ route('register') }}" class="text-center">{{__('Sign up a new membership')}}</a>
        </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
@endsection