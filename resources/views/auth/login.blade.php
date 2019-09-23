@extends('layouts.auth')
@section('title', 'Login') 

@section('content')

    <!-- login-page -->
    <div class="login-page about">
        <img class="login-w3img" src="{!! asset('images/img3.jpg') !!}" alt="">
        <div class="container"> 
            <h3 class="w3ls-title w3ls-title1"><a href="{{ url('/') }}">{{ config('app.name') }}</a></h3>  
            <div class="login-agileinfo"> 
                <h4 class="w3ls-title w3ls-title1"><span>Login Account</span></h4>
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf 
                    <input class="agile-ltext {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                    <input class="agile-ltext {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Enter Password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                    <div class="wthreelogin-text"> 
                        <ul> 
                            <li>
                                <label class="checkbox"><input type="checkbox" name="checkbox" {{ old('remember') ? 'checked' : '' }} checked=""><i></i> 
                                    <span> {{ __('Remember Me') }}</span> 
                                </label> 
                            </li>
                            <li><a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a> </li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>   
                    <input type="submit" value="{{ __('Login') }}">
                </form>
                <p>Don't have an Account? <a href="{{ route('register') }}"> Sign Up Now!</a></p>
                <p>&copy; 2019 {{ config('app.name') }}. All rights reserved | Design by <a href="mailto:dianajoanita900@gmail.com">Diana Joanita</a></p>
            </div>   
        </div>
    </div>
    <!-- //login-page -->
@endsection
