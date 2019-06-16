@extends('layouts.master')
@section('title', 'Menu')

@section('content')

<!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">Menu</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- menu list -->   	
	<div class="wthree-menu">  
		<img src="images/i2.jpg" class="w3order-img" alt=""/>
		<div class="container">
			<h3 class="w3ls-title">Menu</h3>
			<p class="w3lsorder-text">Here your Staple Food Varieties</p>
			<div class="menu-agileinfo">  
				<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
					<a href="{{ route('products') }}"> Breakfast</a>
				</div> 
				<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
					<a href="{{ route('products') }}"> Salads</a>
				</div> 
				<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
					<a href="{{ route('products') }}"> Hot Food</a>
				</div> 
				<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
					<a href="{{ route('products') }}"> Breads</a>
				</div> 
				<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
					<a href="{{ route('products') }}"> Deli Pots & Little Pots</a>
				</div> 
				<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
					<a href="{{ route('products') }}"> Snacks & Treats</a>
				</div> 
				<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
					<a href="{{ route('products') }}"> Drinks</a>
				</div> 
				<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
					<a href="{{ route('products') }}"> South Indian</a>
				</div> 
				<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
					<a href="{{ route('products') }}"> Catering</a>
				</div> 
				<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
					<a href="{{ route('products') }}"> Soups</a>
				</div> 
				<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
					<a href="{{ route('products') }}"> Lunchbox</a>
				</div> 
				<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
					<a href="{{ route('products') }}"> Dinner</a>
				</div> 
				<div class="clearfix"> </div> 
			</div> 
			<div class="w3spl-menu">
				<h3 class="w3ls-title">Seasonal  Menu</h3>
				<p class="w3lsorder-text">Here your Staple Food Varieties</p>
				<div class="menu-agileinfo">  
					<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
						<a href="{{ route('products') }}">Fondue Savoyarde</a>
					</div> 
					<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
						<a href="{{ route('products') }}">Garbure</a>
					</div> 
					<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
						<a href="{{ route('products') }}">Poulet</a>
					</div> 
					<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
						<a href="{{ route('products') }}">Cherry Clafouti</a>
					</div> 
					<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
						<a href="{{ route('products') }}"> Spinach Soufflé</a>
					</div> 
					<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
						<a href="{{ route('products') }}">Baeckeoffe</a>
					</div> 
					<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
						<a href="{{ route('products') }}">Ratatouille</a>
					</div> 
					<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
						<a href="{{ route('products') }}">Piperade</a>
					</div>  
					<div class="clearfix"> </div> 
				</div> 
			</div>
		</div> 
	</div>
	<!-- //menu list -->    
	<!-- add-products -->
	<div class="add-products">  
		<div class="container">
			<h3 class="w3ls-title w3ls-title1">Today's Offers</h3>
			<div class="add-products-row">
				<div class="w3ls-add-grids">
					<a href="{{ route('products') }}"> 
						<h4>Get <span>10%<br>Cashback</span></h4>
						<h5>Special Offer Today Only</h5>
						<h6>Order Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div>
				<div class="w3ls-add-grids w3ls-add-grids-right">
					<a href="{{ route('products') }}"> 
						<h4>GET Upto<span><br>5% Offer</span></h4>
						<h5>On Order Lunch Today</h5>
						<h6>Order Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div> 
				<div class="clearfix"> </div> 
			</div>  	 
		</div>
	</div>
	<!-- //add-products --> 
@endsection