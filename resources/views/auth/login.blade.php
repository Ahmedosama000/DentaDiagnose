@extends('layouts.header')

@section('title','Sign in')

@section('css')

{{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}

@endsection
@section('content')

<div class="signIn">
  <div class="leftSide">
    <img src="images/login.svg" alt="SignIn">
  </div>
  <div class="rightSide">
    <div>
      <div class="heading">
        <h2>Welcome</h2>
        <p class="heading__p">Please enter your email and password</p>
      </div>

      <form id="SignInForm" method="post" action="{{ route('login') }}">
        @csrf
        <div class="row mb-3">
          <div class="signInEmail">
            <input id="SignInEmail" type="email" class="form-control @error('email') is-invalid @enderror" 
             placeholder="Email " name="email"
              value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <br>
            <span class="invalid-feedback" role="alert">
              <strong style="color: red" >{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="SignInPassword">
          <div class="inputBox">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
             placeholder="Password" name="password" required autocomplete="current-password">

            @error('password')
            <br>
            <span class="invalid-feedback" role="alert">
              <strong style="color: red">{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="row mb-0">
          <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
              {{ __('Login') }}
            </button>

            {{-- @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
            </a>
            @endif --}}
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection