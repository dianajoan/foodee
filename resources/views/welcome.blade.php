<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico">

        <title>{{ config('app.name') }} | Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                color: #A52A2A;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url("https://images.pexels.com/photos/2955817/pexels-photo-2955817.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
                background-size: cover;
                display: block;
                background-attachment: fixed;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 14px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .btn {
              color: #fff;
              cursor: pointer;
              font-size: 16px;
              font-weight: 160;
              line-height: 45px;
              margin: 0 0 2em;
              max-width: 90px;
              position: relative;
              text-decoration: none;
              text-transform: uppercase;
              width: 100%;

            }
            @media (min-width: 600px) {
              .btn {
                margin: 0 1em 2em;
              }
            }
            .btn:hover {
              text-decoration: none;
            }

            .btn-1 {
              background: #e02c26;
              font-weight: 100;
            }
            .btn-1 svg {
              height: 45px;
              left: 0;
              position: absolute;
              top: 0;
              width: 100%;
            }
            .btn-1 rect {
              fill: none;
              stroke: #fff;
              stroke-width: 2;
              stroke-dasharray: 422, 0;
              transition: all 0.35s linear;
            }

            .btn-1:hover {
              background: rgba(225, 51, 45, 0);
              font-weight: 900;
              letter-spacing: 1px;
            }
            .btn-1:hover rect {
              stroke-width: 5;
              stroke-dasharray: 15, 310;
              stroke-dashoffset: 48;
              transition: all 1.35s cubic-bezier(0.19, 1, 0.22, 1);
            }

            .btn-5 {
              border: 0 solid;
              box-shadow: inset 0 0 20px rgba(255, 255, 255, 0);
              outline: 1px solid;
              outline-color: rgba(255, 255, 255, 0.5);
              outline-offset: 0px;
              text-shadow: none;
              transition: all 1250ms cubic-bezier(0.19, 1, 0.22, 1);
            }

            .btn-5:hover {
              border: 1px solid;
              box-shadow: inset 0 0 20px rgba(255, 255, 255, 0.5), 0 0 20px rgba(255, 255, 255, 0.2);
              outline-color: rgba(255, 255, 255, 0);
              outline-offset: 15px;
              text-shadow: 1px 1px 2px #427388;
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-1">
                            <svg>
                                <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                            </svg>
                            Home
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-5">
                            Login
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-5">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{ config('app.name') }}
                </div>

                <div class="links">
                    <a href="{{ route('about') }}">About</a>
                    <a href="{{ route('careers') }}">Careers</a>
                    <a href="{{ route('offers') }}">Offers</a>
                    <a href="{{ route('faq') }}">Faq</a>
                    <a href="{{ route('help') }}">Help</a>
                    <a href="{{ route('privacy') }}">Privacy</a>
                    <a href="{{ route('terms') }}">Terms</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </div>
            </div>
        </div>
    </body>
</html>
