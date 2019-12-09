<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    @include('system.partials.styles')
   
  </head>
  <body class="goto-here">

		@include('system.partials.header')

		@yield('content')

		@include('system.partials.footer')

        @include('system.partials.scripts')
		
	</body>
</html>