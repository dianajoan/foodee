@extends('system.auth')
@section('title') Send Email to Reset Password @endsection

@section('content')

<div class="container-login100" style="background-image: url('{{ asset('auth/images/bg-01.jpg') }}');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
                @csrf

                <span class="login100-form-title p-b-37">
                    {{ __('Reset Password') }} | <a href="{{ url('/') }}">{{ config('app.name') }}</a>
                </span>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Your Email">
                    <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Enter Your Email Address" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <span class="focus-input100"></span>
                </div>

                

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </form>
            
        </div>
    </div>

    <div id="dropDownSelect1"></div>

@endsection
