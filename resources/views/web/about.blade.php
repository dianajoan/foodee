@extends('layouts.master')
@section('title', 'About')

@section('content')
    
	<!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">About</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!--  about-page -->
	<div class="about">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">About Us</h3>
			<div class="about-text">	
				<p>Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices. Maecenas dictum arcu purus, sit amet volutpat purus viverra sit amet. Quisque lacinia quam sed tortor interdum, malesuada congue nunc ornare. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In semper lorem eget tortor pulvinar ultricies. Nulla sodales efficitur consequat. Maecenas mi diam, imperdiet consectetur ultricies nec, convallis sit amet turpis.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor vehicula ipsum nec ultrices. Pellentesque sed feugiat sapien.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor vehicula ipsum nec ultrices. Pellentesque sed feugiat sapien.  ullamcorper nunc. Aenean eget massa orci. Vivamus vulputate elit at rutrum elementum. Duis sit amet posuere justo, sit amet finibus urna. Aenean elementum diam nec laoreet sodales. Morbi vulputate tempor nisl nec tristique.</p> 
				<div class="ftr-toprow">
					<div class="col-md-4 ftr-top-grids">
						<div class="ftr-top-left">
							<i class="fa fa-truck" aria-hidden="true"></i>
						</div> 
						<div class="ftr-top-right">
							<h4>Our Community</h4>
							<p>KitchenFood is a global lifestyle community with roots in every corner of the world. United by a love for great taste, our international community of creators opens the door to new experiences — whether you’re looking to expand your palate or embark on your next adventure.</p>
						</div> 
						<div class="clearfix"> </div>
					</div> 
					<div class="col-md-4 ftr-top-grids">
						<div class="ftr-top-left">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div> 
						<div class="ftr-top-right">
							<h4>Original Shows</h4>
							<p>KitchenFood TV gives you full access to hundreds of hours of original KitchenFood shows, featuring your favorite food and travel hosts doing even more of the things you love. Watch streaming 24/7 or on demand from any device.</p>
						</div> <a href="#">Watch Now</a>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 ftr-top-grids">
						<div class="ftr-top-left">
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
						</div> 
						<div class="ftr-top-right">
							<h4>Shop the KitchenFood Store</h4>
							<p>The KitchenFood Store is a curated collection of unique products designed to enhance everyday life, the Tastemade way. Whether you're looking for artisan pieces to gift a friend or you're shopping for your own space, we've got what you need.</p>
						</div>
						<div class="clearfix"> </div>
					</div> 
					<div class="clearfix"> </div>
				</div> 
				<div class="clearfix"> </div>
			</div>
			<div class="history">
				<h3 class="w3ls-title">How does it work ?</h3>
				<p>Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices. Maecenas dictum arcu purus, sit amet volutpat purus viverra sit amet. Quisque lacinia quam sed tortor interdum, malesuada congue nunc ornare. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In semper lorem eget tortor pulvinar ultricies. Nulla sodales efficitur consequat. Maecenas mi diam, imperdiet consectetur ultricies nec, convallis sit amet turpis.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor vehicula ipsum nec ultrices. Pellentesque sed feugiat sapien.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor vehicula ipsum nec ultrices. Pellentesque sed feugiat sapien.  ullamcorper nunc. Aenean eget massa orci. Vivamus vulputate elit at rutrum elementum. Duis sit amet posuere justo, sit amet finibus urna. Aenean elementum diam nec laoreet sodales. Morbi vulputate tempor nisl nec tristique.</p> 
				<h3 class="w3ls-title">Our history</h3>
				<p>Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices. Maecenas dictum arcu purus, sit amet volutpat purus viverra sit amet. Quisque lacinia quam sed tortor interdum, malesuada congue nunc ornare. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In semper lorem eget tortor pulvinar ultricies. Nulla sodales efficitur consequat. Maecenas mi diam, imperdiet consectetur ultricies nec, convallis sit amet turpis.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor vehicula ipsum nec ultrices. Pellentesque sed feugiat sapien.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor vehicula ipsum nec ultrices. Pellentesque sed feugiat sapien.  ullamcorper nunc. Aenean eget massa orci. Vivamus vulputate elit at rutrum elementum. Duis sit amet posuere justo, sit amet finibus urna. Aenean elementum diam nec laoreet sodales. Morbi vulputate tempor nisl nec tristique.</p> 
			</div>
		</div>
	</div>
	<!-- //about-page --> 
@endsection