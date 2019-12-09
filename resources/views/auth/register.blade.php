@extends('system.auth')
@section('title') Create An Account @endsection

@section('content')
    <!-- sign up-page -->
    <div class="container-login100" style="background-image: url('{{ asset('auth/images/bg-01.jpg') }}');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @csrf
                
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                <span class="login100-form-title p-b-37">
                    {{ __('Register') }} | <a href="{{ url('/') }}" style="font-size: 25px;">{{ config('app.name') }}</a>
                </span>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Your Full Name">
                    <input class="input100 @error('first_name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Your Email">
                    <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="Email Address" required>

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

                <div class="wrap-input100 validate-input m-b-25" data-validate = "Confirm Password">
                    <input class="input100 @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" placeholder="Confirm Password" required>

                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        {{ __('Register') }}
                    </button>
                </div>

                <div class="text-center">
                    <a href="{{ route('login') }}" class="txt2 hov1">
                        {{ __('Login') }}
                    </a>
                </div>
            </form>
            
        </div>
    </div>
    
    

    <div id="dropDownSelect1"></div>
    <!-- //sign up-page --> 
@endsection