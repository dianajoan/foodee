@extends('layouts.auth')
@section('title') Sign into Your Account @endsection


@section('content')

    <!-- login-page -->
    <div class="container-login100" style="background-image: url('{{ asset('auth/images/bg-01.jpg') }}');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                <span class="login100-form-title p-b-37" style="text-transform: capitalize;">
                    {{ __('Login') }} | <a href="{{ url('/') }}" style="font-size: 25px;">{{ config('app.name') }}</a>
                </span>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Your Email">
                    <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Enter Your Email Address" required autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter Password">
                    <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter Password" required>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <span class="focus-input100"></span>
                </div>

                <div class="form-group row mr-auto">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn" >
                        {{ __('Login') }}
                    </button>
                </div>

                <div class="text-center p-t-57 p-b-20">
                    <a href="{{ route('password.request') }}" class="txt2 hov1">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>

                <div class="text-center">
                    <a href="{{ route('register') }}" class="txt2 hov1">
                        {{ __('Register') }}
                    </a>
                </div>
            </form>
            
        </div>
    </div>
    
    

    <div id="dropDownSelect1"></div>
    <!-- //login-page -->
@endsection
