@extends('layouts.auth')

@section('content')

<!-- breadcrumb -->  
    <div class="container"> 
        <ol class="breadcrumb w3l-crumbs">
            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li> 
            <li class="active">Sign Up</li>
        </ol>
    </div>
    <!-- //breadcrumb -->
    <!-- sign up-page -->
    <div class="login-page about">
        <img class="login-w3img" src="{!! asset('images/img3.jpg') !!}" alt="">
        <div class="container"> 
            <h3 class="w3ls-title w3ls-title1">Sign Up to your account</h3>  
            <div class="login-agileinfo"> 
                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf 
                    <input class="agile-ltext {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

                    <input class="agile-ltext {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                    <input class="agile-ltext{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Enter Password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                    <input class="agile-ltext {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password_confirmation" placeholder="Enter Password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                    <div class="wthreelogin-text"> 
                        <ul> 
                            <li>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i> 
                                    <span> I agree to the terms of service</span> 
                                </label> 
                            </li> 
                        </ul>
                        <div class="clearfix"> </div>
                    </div>   
                    <input type="submit" value="Sign Up">
                </form>
                <p>Already have an account?  <a href="{{ route('login') }}"> Login Now!</a></p> 
            </div>   
        </div>
    </div>
    <!-- //sign up-page --> 
@endsection