@extends('site.app')
@section('title') Order Completed @endsection

@section('content')

	<div class="hero-wrap hero-bread" style="background-image: url({{ asset('assets/images/bg_1.jpg') }} );">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span></p>
            <h1 class="mb-0 bread">Order Completed</h1>
          </div>
        </div>
      </div>
    </div>

	<section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Order Completed</h2>
        </div>
    </section>
    <section class="section-content bg padding-y border-top">
        <div class="container">
            <div class="row">
                <main class="col-sm-12">
                    <p class="alert alert-success">Your order placed successfully. Your order number is : {{ $order->order_number }}.</p></main>
            </div>
        </div>
    </section>

@endsection