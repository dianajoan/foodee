<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title') | {{ config('app.name') }}</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- Custom Theme files -->
		<link href="{!! asset('css/bootstrap.css') !!}" type="text/css" rel="stylesheet" media="all">
		<link href="{!! asset('css/style.css') !!}" type="text/css" rel="stylesheet" media="all">  
		<link href="{!! asset('css/font-awesome.css') !!}" rel="stylesheet"> <!-- font-awesome icons -->
		<link rel="stylesheet" href="{!! asset('css/owl.carousel.css') !!}" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
		<!-- //Custom Theme files --> 
		<!-- Favicon -->
		<link rel="shortcut icon" href="{!! asset('img/favicon.ico') !!}">

		<!-- js -->
		<script src="{!! asset('js/jquery-2.2.3.min.js') !!}"></script>  
		<!-- //js -->
		<!-- web-fonts -->   
		<link href="//fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet"> 
		<link href="//fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" rel="stylesheet">
		<!-- //web-fonts -->
	</head>
	<body> 

		@yield('content')
		
	</body>
</html>