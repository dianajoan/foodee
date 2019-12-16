@extends('layouts.master')
@section('title') Checkout @endsection

@section('content')


<div class="hero-wrap hero-bread" style="background-image: url({{ asset('frontend/images/bg_1.jpg') }} );">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
      	<p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span></p>
        <h1 class="mb-0 bread">Checkout</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-7 ftco-animate">

			<form action="{{ route('checkout') }}" method="POST" class="billing-form">

				@csrf

				<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
		          	<div class="col-md-6">
		                <div class="form-group">
		                	<label for="name">Name</label>
		                  <input type="text"  value="{{ auth()->user()->name }}"  class="form-control" placeholder="" disabled="">
		                </div>
		            </div>
	                <div class="w-100"></div>
			        <div class="col-md-6">
		            	<div class="form-group">
	                		<label for="towncity">State/Country</label>
	                  		<input type="text" name="country" class="form-control" placeholder="">
	                	</div>
			        </div>
			        <div class="w-100"></div>
			        <div class="col-md-6">
			            <div class="form-group">
		                	<label for="streetaddress">Street Address</label>
		                  	<input type="text" name="address" class="form-control" placeholder="House number and street name">
		                </div>
			        </div>
			        <div class="w-100"></div>
			        <div class="col-md-6">
			            <div class="form-group">
		                	<label for="towncity">Town / City</label>
		                  	<input type="text" name="city" class="form-control" placeholder="">
		                </div>
			        </div>
			        <div class="col-md-6">
			            <div class="form-group">
			            	<label for="postcodezip">Postcode / ZIP *</label>
		                  	<input type="text" name="post_code" class="form-control" placeholder="">
		                </div>
			        </div>
			        <div class="w-100"></div>
			        <div class="col-md-6">
		                <div class="form-group">
		                	<label for="phone">Phone</label>
		                  	<input type="text" name="phone_number" class="form-control" placeholder="">
		                </div>
		            </div>
		            <div class="col-md-6">
		                <div class="form-group">
		                	<label for="emailaddress">Email Address</label>
		                  	<input type="text" value="{{ auth()->user()->email }}"  class="form-control" placeholder="" disabled>
		                </div>
	                </div>
	                <div class="w-100"></div>
			        <div class="col-md-6">
		                <div class="form-group">
		                	<label for="description">Description</label>
		                  	<textarea class="form-control" name="description" rows="6"></textarea>
		                </div>
		            </div>

		            <div class="col-xl-5">
			          <div class="row mt-5 pt-3">
		          		<div class="col-md-12 d-flex mb-5">
			          		<div class="cart-detail cart-total p-3 p-md-4">
			          			<h3 class="billing-heading mb-4">Cart Total</h3>
			          			
			    					<p class="d-flex total-price">
			    						<span>Total</span>
			    						<span>${{$total}}</span>
			    					</p>
									</div>
			          	</div>
		          	
							<button type="submit" class="btn btn-primary py-3 px-4">Place an order</button>
						</div>
			        </div>

		        </div>
	        </form><!-- END -->
		</div>
		
          </div>
      </div> <!-- .col-md-8 -->
    </div>
</div>
</section> <!-- .section -->

@endsection