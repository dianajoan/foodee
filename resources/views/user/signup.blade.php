@extends('site.auth')
@section('title') Create An Account @endsection

@section('content')

    <!-- sign up-page -->
    <div class="container-login100" style="background-image: url('{{ asset('images/bg-01.jpg') }}');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @csrf
                <span class="login100-form-title p-b-37">
                    {{ __('Register') }} | <a href="{{ url('/') }}">{{ config('app.name') }}</a>
                </span>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Your First Name">
                    <input class="input100 {{ $errors->has('first_name') ? ' is-invalid' : '' }}" type="text" name="fist_name" value="{{ old('first_name') }}" required autofocus placeholder="First Name">

                    @if ($errors->has('first_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif

                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Your Last Name">
                    <input class="input100 {{ $errors->has('last_name') ? ' is-invalid' : '' }}" type="text" name="last_name" value="{{ old('last_name') }}" required autofocus placeholder="Last Name">

                    @if ($errors->has('last_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif

                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Your Email">
                    <input class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required>

                    @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter Password">
                    <input class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Enter Password" required>

                    @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate = "Confirm Password">
                    <input class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password_confirmation" placeholder="Enter Password" required>

                    @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Your Address">
                    <input class="input100" type="text" name="address" value="{{ old('address') }}" required autofocus placeholder="Address">

                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Your City">
                    <input class="input100" type="text" name="city" value="{{ old('city') }}" required autofocus placeholder="City">

                    <span class="focus-input100"></span>
                </div>

                <div class="form-group col-md-6">
                    <label for="country">Country</label>
                    <select id="country" class="form-control" name="country">
                        <option> Choose...</option>
                        <option value="United Kingdom">Uganda</option>
                        <option value="France">France</option>
                        <option value="United States" selected="">United States</option>
                    </select>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
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