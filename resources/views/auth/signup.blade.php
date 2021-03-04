@extends('../layouts/app-v1')

@section('title', 'Sign Up')

@section('content')  
<div class="register-box">
  <div class="register-logo">
    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="200px" height="223px" version="1.1" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 1000 1023" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Layer_x0020_1">
        <metadata id="CorelCorpID_0Corel-Layer"/>
        <g id="_1831148959872">
          <g>
          <path fill="#78D4F0" d="M758 217l-435 -143c-65,-8 -93,19 -80,78l99 459 0 -1c16,58 52,76 106,38l345 -313c47,-42 48,-84 -15,-111l-20 -7z"/>
          <path fill="#4BA6C1" d="M784 274l-394 -231c-63,-22 -95,-2 -95,59l0 469 0 0c3,60 35,85 95,59l404 -233c55,-31 64,-72 8,-112l-18 -11z"/>
          <path fill="white" d="M611 315l-141 -82c-22,-8 -33,-1 -33,21l0 166 0 0c1,21 12,30 33,21l144 -83c19,-10 23,-25 3,-39l-6 -4z"/>
          </g>
          <g>
          <rect fill="#4BA6C1" x="152" y="707" width="775" height="190" rx="44" ry="51"/>
          <g>
            <polygon fill="white" points="184,762 211,762 211,768 228,768 254,768 271,768 298,768 298,795 298,858 271,858 271,795 254,795 254,858 228,858 228,795 211,795 211,858 184,858 "/>
            <polygon fill="white" points="308,768 334,768 334,831 351,831 351,768 378,768 378,831 378,858 351,858 334,858 308,858 308,831 "/>
            <polygon fill="white" points="388,768 415,768 458,768 458,795 415,795 415,800 432,800 458,800 458,826 458,831 458,858 432,858 388,858 388,831 432,831 432,826 415,826 388,826 388,800 388,795 "/>
            <rect fill="white" x="548" y="768" width="26.7255" height="89.8947"/>
            <polygon fill="white" points="468,858 468,831 468,768 495,768 495,831 539,831 539,858 495,858 "/>
            <path fill="white" d="M825 795l0 -27 44 0 27 0 0 27 0 36 0 27 -27 0 -17 0 0 27 -27 0 0 -27 0 -27 0 -36zm44 0l-17 0 0 36 17 0 0 -36z"/>
            <polygon fill="white" points="584,761 610,761 610,767 627,767 654,767 671,767 698,767 698,794 698,857 671,857 671,794 654,794 654,857 627,857 627,794 610,794 610,857 584,857 "/>
            <polygon fill="white" points="745,768 772,768 772,831 789,831 789,761 816,761 816,831 816,858 789,858 772,858 745,858 745,831 "/>
            <path fill="white" d="M788 755l30 0c4,-1 5,-3 3,-7l-16 -26 0 0c-2,-3 -5,-4 -7,0l-15 27c-2,3 -1,6 3,6l2 0z"/>
          </g>
          </g>
        </g>
        </g>
    </svg>
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