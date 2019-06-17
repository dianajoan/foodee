@extends('layouts.auth')

@section('content')
<!-- breadcrumb -->  
    <div class="container"> 
        <ol class="breadcrumb w3l-crumbs">
            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li> 
            <li class="active">Login</li>
        </ol>
    </div>
    <!-- //breadcrumb -->
    <!-- login-page -->
    <div class="login-page about">
        <img class="login-w3img" src="{!! asset('images/img3.jpg') !!}" alt="">
        <div class="container"> 
            <h3 class="w3ls-title w3ls-title1">Login to your account</h3>  
            <div class="login-agileinfo"> 
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
            </div>   
        </div>
    </div>
    <!-- //login-page -->
@endsection
