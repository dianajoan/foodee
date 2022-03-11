@extends('layouts.master')
@section('title') Products @endsection

@section('content')

<div class="hero-wrap hero-bread" style="background-image: url({{ asset('frontend/images/bg_1.jpg') }} );">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span></p>
        <h1 class="mb-0 bread">Products</h1>
      </div>
    </div>
  </div>
</div>


<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="{{ route('all-products') }}" class="active">All</a></li>
    					<li><a href="#">Vegetables</a></li>
    					<li><a href="#">Fruits</a></li>
    					<li><a href="#">Juice</a></li>
    					<li><a href="#">Dried</a></li>
    				</ul>
    			</div>
    		</div>
           

    		<div class="row">

                @foreach($products->chunk(3) as $productChunk)

                @foreach($productChunk as $product)

        			<div class="col-md-6 col-lg-3 ftco-animate">
        				<div class="product">
        					<a href="#" class="img-prod"><img class="img-fluid" src="{{$product->imagePath}}" alt="">
        						<span class="status">{{$product->status}}</span>
        						<div class="overlay"></div>
        					</a>
        					<div class="text py-3 pb-4 px-3 text-center">
        						<h3><a href="#">{{$product->name}}</a></h3>
        						<div class="d-flex">
        							<div class="pricing">
    		    						<p class="price">
                                           <span class="mr-2 price-dc">{{$product->previous_price}}</span><span class="price-sale">${{$product->current_price}}</span>
                                        </p>
    		    					</div>
    	    					</div>
    	    					<div class="bottom-area d-flex px-3">
    	    						<div class="m-auto d-flex">
    	    							<a href="{{route('product-details', $product->id)}}" class="add-to-cart d-flex justify-content-center align-items-center text-center" title="Product details">
    	    								<span><i class="ion-ios-menu"></i></span>
    	    							</a>
    	    							<a href="{{route('product.addToCart', ['id' => $product->id])}}" class="buy-now d-flex justify-content-center align-items-center mx-1" title="Add to Cart">
    	    								<span><i class="ion-ios-cart"></i></span>
    	    							</a>
    	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
    	    								<span><i class="ion-ios-heart"></i></span>
    	    							</a>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
                @endforeach
                @endforeach
        	</div>
    </section>

@endsection