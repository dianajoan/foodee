@extends('system.app')
@section('title') Cart @endsection

@section('content')


<div class="hero-wrap hero-bread" style="background-image: url({{ asset('assets/images/bg_1.jpg') }} );">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
      	<p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span></p>
        <h1 class="mb-0 bread">My Cart</h1>
      </div>
    </div>
  </div>
</div>

    @if (Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif

    <section class="ftco-section ftco-cart">
		<div class="container">
			<div class="row">
    			<div class="col-md-12 ftco-animate">

                    @if (\Cart::isEmpty())
                        <p class="alert alert-warning">Your shopping cart is empty.</p>
                    @else

    				<div class="cart-list">
        				<table class="table">
    					    <thead class="thead-primary">
    					      <tr class="text-center">
    					        <th>#</th>
    					        <th>Product name</th>
    					        <th>Price</th>
    					        <th>Quantity</th>
    					        <th>Total</th>
    					        <th>Actions</th>
    					      </tr>
    					    </thead>
    					    <tbody>

                            @foreach(\Cart::getContent() as $item)

    					        <tr class="text-center">
    					        
        					        <td class="image-prod">
                                        <div class="img" src="#" width="100" height="100">
                                            {{ Str::words($item->name,20) }}
                                        </div>
                                        @foreach($item->attributes as $key  => $value)
                                            <dl class="dlist-inline small">
                                                <dt>{{ ucwords($key) }}: </dt>
                                                <dd>{{ ucwords($value) }}</dd>
                                            </dl>
                                        @endforeach
                                    </td>
        					        
        					        <td class="product-name">
        					        	<h3>{{$product['item']['name']}}</h3>
        					        	<p>Far far away, behind the word mountains, far from the countries</p>
        					        </td>
        					        
        					        <td class="price">
                                        {{ config('settings.currency_symbol'). $item->price }}
                                    </td>
        					        
        					        <td class="quantity">
        					        	<div class="input-group mb-3">
        				             	     <input type="number" name="quantity" class="quantity form-control input-number" value="{{ $item->quantity }}" min="1" max="100">
        				          	    </div>
        				            </td>
        					@endforeach
        					        <td class="total">
                                        <strong>
                                            {{ config('settings.currency_symbol') }}{{ \Cart::getSubTotal() }}
                                        </strong>
                                    </td>
                                    <td class="product-remove">
                                        <a href="{{ route('checkout.cart.remove', $item->id) }}">
                                            <span class="ion-ios-close"></span>
                                        </a>
                                        <a href="{{ route('checkout.cart.clear') }}" class="btn btn-danger">Clear Cart</a>
                                    </td>
    					        </tr><!-- END TR-->
    					    </tbody>
    					  </table>

                          <p><a href="{{ route('checkout.index') }}" class="btn btn-primary py-3 px-3">Proceed to Checkout</a></p>

    				  </div>
                      @endif
    			</div>
    		</div>
		</div>
		</section>

@endsection