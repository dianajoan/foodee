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
			<div class="row justify-content-center">
        <div class="col-md-8">
            <h2>My Orders</h2>

            @foreach($orders as $order)

            <div class="card">
                <div class="card-body">
                    <ul class="list-group">

                        @foreach($order->cart->items as $item)

                        <li class="list-group-item">
                            <span class="badge">$ {{$item['current_price']}}</span>
                            {{$item['item']['name']}} | <span class="badge">{{$item['qty']}}</span>
                        </li>

                        @endforeach

                    </ul>
                </div>
                <div class="card-footer">
                    <strong>Total Price: $ {{$order->cart->totalPrice}}</strong>
                </div>
            </div>

            @endforeach

        </div>
    </div>
		</div>
		</section>

@endsection