<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    @include('site.partials.styles')
   
  </head>
  <body class="goto-here">

		@include('site.partials.header')

		@yield('content')

		@include('site.partials.footer')

        @include('site.partials.scripts')
		
	</body>
</html>