@extends('site.app')
@section('title') $category->name @endsection

@section('content')

<div class="hero-wrap hero-bread" style="background-image: url({{ asset('assets/images/bg_1.jpg') }} );">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span></p>
            <h1 class="mb-0 bread">{{ $category->names }}</h1>
          </div>
        </div>
      </div>
    </div>

<section class="ftco-section ftco-category ftco-no-pt">
      <div class="container">
        <div class="row">

          @forelse($category->products as $product)

          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">

              @if ($product->images->count() > 0)

              <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('storage/'.$product->images->first()->full) }}" alt="Colorlib Template">
                <span class="status">30%</span>
                <div class="overlay"></div>
              </a>

              @else

              <a href="https://via.placeholder.com/176" class="img-prod"><img class="img-fluid" src="https://via.placeholder.com/176" alt="Colorlib Template">
                <span class="status">30%</span>
                <div class="overlay"></div>
              </a>

              @endif

              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price">

                      @if ($product->sale_price != 0)

                        <span class="mr-2 price-dc">
                          {{ config('settings.currency_symbol').$product->price }}
                        </span>

                      @else

                        <span class="price-sale">
                          {{ config('settings.currency_symbol').$product->sale_price }}
                        </span>

                      @endif

                    </p>
                  </div>
                </div>
                <div class="bottom-area d-flex px-3">
                  <div class="m-auto d-flex">
                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                      <span><i class="ion-ios-menu"></i></span>
                    </a>
                    <a href="{{route('product.addToCart', ['id' => $product->id])}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
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

          @empty
              <p>No Products found in {{ $category->name }}.</p>
          @endforelse

            </div>
      </div>
    </section>

@endsection