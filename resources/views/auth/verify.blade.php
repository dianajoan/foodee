@extends('layouts.auth')
@section('title') Verify Your Email @endsection

@section('content')

<div class="container-login100" style="background-image: url('{{ asset('images/bg-01.jpg') }}');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">

                <span class="login100-form-title p-b-37">
                    {{ __('Verify Your Email Address') }} | <a href="{{ url('/') }}">{{ config('app.name') }}</a>
                </span>

                <div class="wrap-input100 validate-input m-b-20">

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>

    <div id="dropDownSelect1"></div>

@endsection
