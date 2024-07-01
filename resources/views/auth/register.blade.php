@extends('layouts.header')

@section('title','Register')

@section('css')

{{--
<link rel="stylesheet" href="{{ asset("/css/bootstrap.min.css") }}"> --}}

{{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

@endsection

@section('content')

<div class="signIn signUp">
    <div class="leftSide">
        <img src="{{ asset("/images/login.svg") }}" alt="SignIn">
    </div>
    <div class="rightSide">
        <div class="heading">
            <h2>Sign Up</h2>
            <p class="heading__p">Create your new account</p>
        </div>
        <div class="btns">

            <button class="sign__btn active" onclick="location.href='/register/center'" type="button">Radiology Center</button>
            <button class="sign__btn" onclick="location.href='/register/dentist'" type="button">Dentist</button>

            {{-- <button class="sign__btn active">Radiology Center</button> --}}
            {{-- <button class="sign__btn">Dentist</button> --}}
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="signInName">
                <div>
                    <input placeholder="First Name" id="name" type="text" class="form-control @error('firstname') is-invalid @enderror"
                        name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                    @error('firstname')
                    <br>
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: red">{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div>
                    <input placeholder="Last Name" id="name" type="text" class="form-control @error('secondname') is-invalid @enderror"
                        name="secondname" value="{{ old('secondname') }}" required autocomplete="secondname" autofocus>

                    @error('lastname')
                    <br>
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: red">{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="signInEmail">
                <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <br>
                <span class="invalid-feedback" role="alert">
                    <strong style="color: red">{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="signInPhone">
                <input placeholder="Phone" id="phone" type="number" class="form-control @error('phonenumber') is-invalid @enderror"
                    name="phonenumber" required autocomplete="phone">

                @error('phonenumber')
                <br>
                <span class="invalid-feedback" role="alert">
                    <strong style="color: red">{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="SignInPassword">
                <div class="inputBox">
                    <div class="icon">
                    <input placeholder="Password" id="signUpPassword" type="password" class="password" @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">
                        <i class="uil uil-eye toggle"></i>

                    @error('password')
                    <br>
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: red">{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                </div>
            </div>

            <div class="SignInPassword">
                <div class="inputBox">
                    <div class="icon">
                    <input placeholder="Comfirm Password" id="confirmPassword" type="password" class="ConfirmPassword" name="password_confirmation"
                        required autocomplete="new-password">
                        <i class="uil uil-eye confirmToggle"></i>

                </div>
                </div>
            </div>

            <div id="signUpSubmit" class="row mb-0">
                <button type="submit" id="signUpSubmit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection