@extends('layouts.master')
@section('title') Cart @endsection

@section('content')


<div class="hero-wrap hero-bread" style="background-image: url({{ asset('frontend/images/bg_1.jpg') }} );">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
      	<p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span></p>
        <h1 class="mb-0 bread">My Cart</h1>
      </div>
    </div>
  </div>
</div>

    @if(Session::has('cart'))

    <section class="ftco-section ftco-cart">
		<div class="container">
			<div class="row">
    			<div class="col-md-12 ftco-animate">


    				<div class="cart-list">
        				<table class="table">
    					    <thead class="thead-primary">
    					      <tr class="text-center">
    					        <th>#</th>
    					        <th>Product name</th>
    					        <th>Price</th>
    					        <th>Quantity</th>
    					        <th>Actions</th>
    					      </tr>
    					    </thead>
    					    <tbody>

                                <?php $i=0; ?>
                                 @foreach($products as $product)

        					        <tr class="text-center">
        					        
            					        <td>{{ ++$i }}</td>
            					        
            					        <td class="product-name">
            					        	<h3>{{$product['item']['name']}}</h3>
            					        </td>
            					        
            					        <td class="price">
                                            ${{$product['item']['current_price']}}
                                        </td>
            					        
            					        <td class="quantity">
            					        	<div class="input-group mb-3">
            				             	  <input type="number" name="quantity" class="quantity form-control input-number" value="{{$product['qty']}}" min="1" max="100">
            				          	    </div>
            				            </td>

                                        <div class="row text-center" style="margin-left: 3px;">
                                            <td class="product-remove">
                                            <a href="{{route('product.remove', ['id' => $product['item']['id']])}}" title="Delete" ><span class="ion-ios-close"></span></a>
                                        </td>
                                    </div>
        					        </tr><!-- END TR-->
                                @endforeach
    					    </tbody>
    					  </table>

                          <p style="float: right; color: red;">Total: <b>${{$totalPrice}}</b></p>

                          <p><a href="{{ route('checkout') }}" class="btn btn-primary py-3 px-3">Proceed to Checkout</a></p>

    				  </div>
                      
    			</div>
    		</div>
		</div>
		</section>

        @else

            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-6 col-sm-3">
                    <p class="alert alert-warning">Your shopping cart is empty.</p>
                </div>
            </div>
            
        @endif

@endsection