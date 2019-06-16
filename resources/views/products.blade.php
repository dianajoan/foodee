@extends('layouts.master')
@section('title', 'products')

@section('content')

<!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">Dishes</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- products -->
	<div class="products">	 
		<div class="container">
			<div class="col-md-9 product-w3ls-right"> 
				<div class="product-top">
					<h4>Food Collection</h4>
					<ul> 
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Filter By<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Low price</a></li> 
								<li><a href="#">High price</a></li>
								<li><a href="#">Latest</a></li>  
							</ul> 
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Food Type<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Breakfast</a></li> 
								<li><a href="#">Lunch</a></li>
								<li><a href="#">Dinner</a></li>  
							</ul> 
						</li>
					</ul> 
					<div class="clearfix"> </div>
				</div>
				<div class="products-row">
					<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
									<img src="{!! asset('images/g6.jpg') !!}" class="img-responsive" alt="img">
									<div class="agile-product-text">              
										<h5>Fish salad</h5>  
									</div> 
								</div>
								<div class="back">
									<h4>Fish salad</h4>
									<p>Maecenas condimentum interdum lacus, ac varius nisl.</p>
									<h6>3<sup>$</sup></h6>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="w3ls_item" value="Fish salad"> 
										<input type="hidden" name="amount" value="3.00"> 
										<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										<span class="w3-agile-line"> </span>
										<a href="#" data-toggle="modal" data-target="#myModal1">More</a>
									</form>
								</div>
							</div>
						</div> 
					</div> 
					<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
									<div class="agile-product-text agile-product-text2">              
										<h5>Sandwich</h5>  
									</div> 
									<img src="{!! asset('images/g1.jpg') !!}" class="img-responsive" alt="img"> 
								</div>
								<div class="back">
									<h4>Sandwich</h4>
									<p>Maecenas condimentum interdum lacus, ac varius nisl.</p>
									<h6>2<sup>$</sup></h6>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="w3ls_item" value="Sandwich"> 
										<input type="hidden" name="amount" value="2.00"> 
										<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										<span class="w3-agile-line"> </span>
										<a href="#" data-toggle="modal" data-target="#myModal1">More</a>
									</form>
								</div>
							</div>
						</div> 
					</div>
					<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
									<img src="{!! asset('images/g3.jpg') !!}" class="img-responsive" alt="img">
									<div class="agile-product-text">              
										<h5>Indian Food</h5>  
									</div> 
								</div>
								<div class="back">
									<h4>Indian Food</h4>
									<p>Maecenas condimentum interdum lacus, ac varius nisl.</p>
									<h6>2<sup>$</sup></h6>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="w3ls_item" value="Indian Food"> 
										<input type="hidden" name="amount" value="2.00"> 
										<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										<span class="w3-agile-line"> </span>
										<a href="#" data-toggle="modal" data-target="#myModal1">More</a>
									</form>
								</div>
							</div>
						</div> 
					</div>
					<div class="col-xs-6 col-sm-6 product-grids">
						<div class="flip-container flip-container1">
							<div class="flipper agile-products">
								<div class="front"> 
									<div class="agile-product-text agile-product-text2">              
										<h5>Sandwich & soup</h5>  
									</div> 
									<img src="{!! asset('images/g7.jpg') !!}" class="img-responsive" alt="img"> 
								</div>
								<div class="back">
									<h4>Sandwich & soup</h4>
									<p>Maecenas condimentum interdum lacus, ac varius nisl  condimentum interdum lacus, ac varius nisl.</p>
									<h6>5<sup>$</sup></h6>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="w3ls_item" value="Sandwich & soup"> 
										<input type="hidden" name="amount" value="5.00"> 
										<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										<span class="w3-agile-line"> </span>
										<a href="#" data-toggle="modal" data-target="#myModal1">More</a>
									</form>
								</div>
							</div>
						</div> 
					</div>
					<div class="col-xs-6 col-sm-6 product-grids">
						<div class="flip-container flip-container1">
							<div class="flipper agile-products">
								<div class="front"> 
									<img src="{!! asset('images/g8.jpg') !!}" class="img-responsive" alt="img">
									<div class="agile-product-text">              
										<h5>Asia Meals</h5>  
									</div> 
								</div>
								<div class="back">
									<h4>Asia Meals</h4>
									<p>Maecenas condimentum interdum lacus, ac varius nisl  condimentum interdum lacus, ac varius nisl.</p>
									<h6>8<sup>$</sup></h6>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="w3ls_item" value="Asia Meals"> 
										<input type="hidden" name="amount" value="8.00"> 
										<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										<span class="w3-agile-line"> </span>
										<a href="#" data-toggle="modal" data-target="#myModal1">More</a>
									</form>
								</div>
							</div>
						</div> 
					</div> 
					<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
									<img src="{!! asset('images/img1.jpg') !!}" class="img-responsive" alt="img">
									<div class="agile-product-text">              
										<h5>Bread Toast</h5>  
									</div> 
								</div>
								<div class="back">
									<h4>Bread Toast</h4>
									<p>Maecenas condimentum interdum lacus, ac varius nisl.</p>
									<h6>2<sup>$</sup></h6>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="w3ls_item" value="Bread Toast"> 
										<input type="hidden" name="amount" value="2.00"> 
										<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										<span class="w3-agile-line"> </span>
										<a href="#" data-toggle="modal" data-target="#myModal1">More</a>
									</form>
								</div>
							</div>
						</div> 
					</div>
					<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
									<div class="agile-product-text agile-product-text2">              
										<h5>Chinese Dish</h5>  
									</div> 
									<img src="{!! asset('images/g2.jpg') !!}" class="img-responsive" alt="img"> 
								</div>
								<div class="back">
									<h4>Chinese Dish</h4>
									<p>Maecenas condimentum interdum lacus, ac varius nisl.</p>
									<h6>3<sup>$</sup></h6>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="w3ls_item" value="Chinese Dish"> 
										<input type="hidden" name="amount" value="3.00"> 
										<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										<span class="w3-agile-line"> </span>
										<a href="#" data-toggle="modal" data-target="#myModal1">More</a>
									</form>
								</div>
							</div>
						</div> 
					</div> 
					<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
									<img src="{!! asset('images/g9.jpg') !!}" class="img-responsive" alt="img">
									<div class="agile-product-text">              
										<h5>Duck roast</h5>  
									</div> 
								</div>
								<div class="back">
									<h4>Duck roast</h4>
									<p>Maecenas condimentum interdum lacus, ac varius nisl.</p>
									<h6>7<sup>$</sup></h6>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="w3ls_item" value="Duck roast"> 
										<input type="hidden" name="amount" value="7.00"> 
										<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										<span class="w3-agile-line"> </span>
										<a href="#" data-toggle="modal" data-target="#myModal1">More</a>
									</form>
								</div>
							</div>
						</div> 
					</div>
					<div class="col-xs-6 col-sm-6 product-grids">
						<div class="flip-container flip-container1">
							<div class="flipper agile-products">
								<div class="front"> 
									<div class="agile-product-text agile-product-text2">              
										<h5>Sandwich & soup</h5>  
									</div> 
									<img src="{!! asset('images/g5.jpg') !!}" class="img-responsive" alt="img"> 
								</div>
								<div class="back">
									<h4>Sandwich & soup</h4>
									<p>Maecenas condimentum interdum lacus, ac varius nisl  condimentum interdum lacus, ac varius nisl.</p>
									<h6>5<sup>$</sup></h6>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="w3ls_item" value="Sandwich & soup"> 
										<input type="hidden" name="amount" value="5.00"> 
										<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										<span class="w3-agile-line"> </span>
										<a href="#" data-toggle="modal" data-target="#myModal1">More</a>
									</form>
								</div>
							</div>
						</div> 
					</div>
					<div class="col-xs-6 col-sm-6 product-grids">
						<div class="flip-container flip-container1">
							<div class="flipper agile-products">
								<div class="front"> 
									<img src="{!! asset('images/g4.jpg') !!}" class="img-responsive" alt="img">
									<div class="agile-product-text">              
										<h5>Rice & meat </h5>  
									</div> 
								</div>
								<div class="back">
									<h4>Rice & meat </h4>
									<p>Maecenas condimentum interdum lacus, ac varius nisl  condimentum interdum lacus, ac varius nisl.</p>
									<h6>6<sup>$</sup></h6>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="w3ls_item" value="Rice & meat "> 
										<input type="hidden" name="amount" value="6.00"> 
										<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										<span class="w3-agile-line"> </span>
										<a href="#" data-toggle="modal" data-target="#myModal1">More</a>
									</form>
								</div>
							</div>
						</div> 
					</div> 
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 rsidebar">
				<div class="rsidebar-top">
					<div class="slider-left">
						<h4>CHOOSE BY AGE</h4>            
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kids</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Youngers</label>  
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Adults</label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Senior Citizen</label>  
						</div> 
					</div>
					<div class="sidebar-row">
						<h4>By Cuisine</h4>
						<ul class="faq">
							<li class="item1"><a href="#">Indian Food<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#">Breakfast</a></li>										
									<li class="subitem1"><a href="#">Lunch</a></li>										
									<li class="subitem1"><a href="#">Dinner</a></li>										
									<li class="subitem1"><a href="#">Trending Food</a></li>										
								</ul>
							</li>
							<li class="item2"><a href="#">Italian Food<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#">Panzanella</a></li>										
									<li class="subitem1"><a href="#">Margherita Pizza </a></li>										
									<li class="subitem1"><a href="#">Panna Cotta</a></li>										
									<li class="subitem1"><a href="#">Corn Cannelloni</a></li>										
								</ul>
							</li>
							<li class="item3"><a href="#">American Food<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#">Sandwiches</a></li>										
									<li class="subitem1"><a href="#">Hot dog</a></li>										
									<li class="subitem1"><a href="#">Chicken bog</a></li>										
								</ul>
							</li>
						</ul>
						<div class="clearfix"> </div> 
						<!-- script for tabs -->
						<script type="text/javascript">
							$(function() {
							
								var menu_ul = $('.faq > li > ul'),
									   menu_a  = $('.faq > li > a');
								
								menu_ul.hide();
							
								menu_a.click(function(e) {
									e.preventDefault();
									if(!$(this).hasClass('active')) {
										menu_a.removeClass('active');
										menu_ul.filter(':visible').slideUp('normal');
										$(this).addClass('active').next().stop(true,true).slideDown('normal');
									} else {
										$(this).removeClass('active');
										$(this).next().stop(true,true).slideUp('normal');
									}
								});
							
							});
						</script>
						<!-- script for tabs -->
					</div>
					<div class="sidebar-row">
						<h4>DISCOUNTS</h4>
						<div class="row row1 scroll-pane">  
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (2)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (5)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						</div>
					</div>
					<div class="sidebar-row">
						<h4>DELIVERY TIME</h4>
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>6.30 am to 8.30 am</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>11.30 am to 1.30 pm</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>7.30 pm to 10.00 pm</label> 
						</div>
					</div>			 
				</div>
				<div class="related-row">
					<h4>Related Searches</h4>
					<ul>
						<li><a href="{{ route('products') }}">Salads </a></li>
						<li><a href="{{ route('products') }}">Vegetarian</a></li>
						<li><a href="{{ route('products') }}">Dinner</a></li>
						<li><a href="{{ route('products') }}">Diet Soup</a></li>
						<li><a href="{{ route('products') }}">Sweets</a></li>
						<li><a href="{{ route('products') }}">Seasonal</a></li>
						<li><a href="{{ route('products') }}">Breakfast</a></li>
						<li><a href="{{ route('products') }}">Italian Food</a></li>
						<li><a href="{{ route('products') }}">Meals</a></li> 
					</ul>
				</div>
				<div class="related-row">
					<h4>YOU MAY ALSO LIKE</h4>
					<div class="galry-like">  
						<a href="#" data-toggle="modal" data-target="#myModal1"><img src="{!! asset('images/s1.jpg') !!}" class="img-responsive" alt="img"></a>         
					</div>
				</div>
			</div>
			<div class="clearfix"> </div> 
		</div>
	</div>
	<!-- //products --> 
	<div class="container"> 
		<div class="w3agile-deals prds-w3text"> 
			<h5>Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.</h5>
		</div>
	</div>
	<!-- dishes -->
    <div class="w3agile-spldishes">
        <div class="container">
            <h3 class="w3ls-title">Special Foods</h3>
            <div class="spldishes-agileinfo">
                <div class="col-md-3 spldishes-w3left">
                    <h5 class="w3ltitle">Staple Specials</h5>
                    <p>Vero vulputate enim non justo posuere placerat Phasellus mauris vulputate enim non justo enim .</p>
                </div> 
                <div class="col-md-9 spldishes-grids">
                    <!-- Owl-Carousel -->
                    <div id="owl-demo" class="owl-carousel text-center agileinfo-gallery-row">
                        <a href="{{ route('products') }}" class="item g1">
                            <img class="lazyOwl" src="{!! asset('images/g1.jpg') !!}" title="Our latest gallery" alt=""/>
                            <div class="agile-dish-caption">
                                <h4>Duis congue</h4>
                                <span>Neque porro quisquam est qui dolorem </span>
                            </div>
                        </a>
                        <a href="{{ route('products') }}" class="item g1">
                            <img class="lazyOwl" src="{!! asset('images/g2.jpg') !!}" title="Our latest gallery" alt=""/>
                            <div class="agile-dish-caption">
                                <h4>Duis congue</h4>
                                <span>Neque porro quisquam est qui dolorem </span>
                            </div>
                        </a>
                        <a href="{{ route('products') }}" class="item g1">
                            <img class="lazyOwl" src="{!! asset('images/g3.jpg') !!}" title="Our latest gallery" alt=""/>
                            <div class="agile-dish-caption">
                                <h4>Duis congue</h4>
                                <span>Neque porro quisquam est qui dolorem </span>
                            </div>
                        </a>
                        <a href="{{ route('products') }}" class="item g1">
                            <img class="lazyOwl" src="{!! asset('images/g4.jpg') !!}" title="Our latest gallery" alt=""/>
                            <div class="agile-dish-caption">
                                <h4>Duis congue</h4>
                                <span>Neque porro quisquam est qui dolorem </span>
                            </div>
                        </a>
                        <a href="{{ route('products') }}" class="item g1">
                            <img class="lazyOwl" src="{!! asset('images/g5.jpg') !!}" alt=""/>
                            <div class="agile-dish-caption">
                                <h4>Duis congue</h4>
                                <span>Neque porro quisquam est qui dolorem </span>
                            </div>
                        </a> 
                        <a href="{{ route('products') }}" class="item g1">
                            <img class="lazyOwl" src="{!! asset('images/g1.jpg') !!}" title="Our latest gallery" alt=""/>
                            <div class="agile-dish-caption">
                                <h4>Duis congue</h4>
                                <span>Neque porro quisquam est qui dolorem </span>
                            </div>
                        </a>
                        <a href="{{ route('products') }}" class="item g1">
                            <img class="lazyOwl" src="{!! asset('images/g2.jpg') !!}" title="Our latest gallery" alt=""/>
                            <div class="agile-dish-caption">
                                <h4>Duis congue</h4>
                                <span>Neque porro quisquam est qui dolorem </span>
                            </div>
                        </a>
                        <a href="{{ route('products') }}" class="item g1">
                            <img class="lazyOwl" src="{!! asset('images/g3.jpg') !!}" title="Our latest gallery" alt=""/>
                            <div class="agile-dish-caption">
                                <h4>Duis congue</h4>
                                <span>Neque porro quisquam est qui dolorem </span>
                            </div>
                        </a>
                    </div> 
                </div>  
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //dishes --> 
	<!-- modal --> 
	<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="{!! asset('images/s1.jpg') !!}" alt=" " class="img-responsive">
						</div>
						<div class="col-md-7 modal_body_right single-top-right"> 
							<h3 class="item_name">France Special Dish</h3>
							<p>Proin placerat urna et consequat efficitur, sem odio blandit enim</p>
							<div class="single-rating">
								<ul>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li class="w3act"><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li class="rating">20 reviews</li>
									<li><a href="#">Add your review</a></li>
								</ul> 
							</div>
							<div class="single-price">
								<ul>
									<li>$18</li>  
									<li><del>$20</del></li> 
									<li><span class="w3off">10% OFF</span></li> 
									<li>Ends on : Dec,5th</li>
									<li><a href="#"><i class="fa fa-gift" aria-hidden="true"></i> Coupon</a></li>
								</ul>	
							</div> 
							<p class="single-price-text">Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra. </p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" /> 
								<input type="hidden" name="w3ls_item" value="France Special" /> 
								<input type="hidden" name="amount" value="18.00" /> 
								<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
							</form>
							<a href="#" class="w3ls-cart w3ls-cart-like"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Wishlist</a>
							<div class="single-page-icons social-icons"> 
								<ul>
									<li><h4>Share on</h4></li>
									<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
									<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
									<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
									<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
									<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
								</ul>
							</div> 
						</div> 
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div> 
	<!-- //modal -->
	<!-- subscribe -->
	<div class="subscribe agileits-w3layouts"> 
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>Keep in touch</h4>  
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
				</ul> 
				<ul class="apps"> 
					<li><h4>Download Our app : </h4> </li>
					<li><a href="#" class="fa fa-apple"></a></li>
					<li><a href="#" class="fa fa-windows"></a></li>
					<li><a href="#" class="fa fa-android"></a></li>
				</ul> 
			</div> 
			<div class="col-md-6 subscribe-right">
				<h3 class="w3ls-title">Subscribe to Our <br><span>Newsletter</span></h3>  
				<form action="#" method="post"> 
					<input type="email" name="email" placeholder="Enter your Email..." required="">
					<input type="submit" value="Subscribe">
					<div class="clearfix"> </div> 
				</form> 
				<img src="{!! asset('images/i1.png') !!}" class="sub-w3lsimg" alt=""/>
			</div>
			<div class="clearfix"> </div> 
		</div>
	</div>
	<!-- //subscribe --> 
@endsection