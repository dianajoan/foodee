@extends('layouts.master')
@section('title') My Profile @endsection

@section('content')


<div class="hero-wrap hero-bread" style="background-image: url({{ asset('frontend/images/bg_1.jpg') }} );">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
      	<p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span></p>
        <h1 class="mb-0 bread">My Profile</h1>
      </div>
    </div>
  </div>
</div>

    <section class="ftco-section ftco-cart">
		<div class="container">
			<div class="row">
    			<div class="col-md-12 ftco-animate">
                    <h3>My Orders</h3>

    				<div class="cart-list">
        				<table class="table">
    					    <thead class="thead-primary">
    					      <tr class="text-center">
    					        <th>#</th>
    					        <th>Product name</th>
    					        <th>Price</th>
    					        <th>Quantity</th>
                                <th>Total Price</th>
    					      </tr>
    					    </thead>
    					    <tbody>

                                <?php $i=0; ?>
                                 @foreach($orders as $order)

                                     @foreach($order->cart->items as $item)

            					        <tr class="text-center">
            					        
                					        <td>{{ ++$i }}</td>
                					        
                					        <td class="product-name">
                					        	<h3>{{$item['item']['name']}}</h3>
                					        </td>
                					        
                					        <td class="price">
                                                $ {{$item['current_price']}}
                                            </td>
                					        
                                            <td class="quantity">
                                                {{$item['qty']}}
                                            </td>

                                            <td class="total">
                                                $ {{$order->cart->totalPrice}}
                                            </td>
                					        
            					        </tr><!-- END TR-->
                                    @endforeach
                                @endforeach
    					    </tbody>
    					  </table>
    				  </div>
                      
    			</div>
    		</div>
		</div>
		</section>

@endsection