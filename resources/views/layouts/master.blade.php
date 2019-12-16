<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    @include('layouts.includes.styles')
   
  </head>
  <body class="goto-here">

		@include('layouts.includes.header')
    @include('layouts.includes.notification')

		@yield('content')

		@include('layouts.includes.footer')

        @include('layouts.includes.scripts')
		
	</body>
</html>