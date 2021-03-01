@extends('layouts/app-v2')

@section('title', 'Home')

@section('content')
  <div class="content-wrapper mt-3">
    <div class="col-md-12">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                Selamat Datang <strong>{{__('@')}}{{ auth()->user()->username }}</strong>
                <hr>
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
        </div>
    </div>
  </div>
@endsection