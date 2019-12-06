<!-- Page Header-->
      <div class="py-1 bg-primary">
      <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
          <div class="col-lg-12 d-block">
            <div class="row d-flex">
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                <span class="text">+256 771991162</span>
              </div>
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                <span class="text">foodee@gmail.com</span>
              </div>
              <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                <span class="text">3-5 Business days delivery &amp; Free Returns</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Foodee</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{ route('checkout.index') }}">Checkout</a>
                <a class="dropdown-item" href="{{ route('account.orders') }}">Order</a>
              </div>
            </li>

            @foreach($categories as $cat)
                @foreach($cat->items as $category)
                    @if ($category->items->count() > 0)

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('categories.show', $category->slug) }}" id="{{ $category->slug }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $category->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="{{ $category->slug }}">
                          @foreach($category->items as $item)
                            <a class="dropdown-item" href="{{ route('categories.show', $item->slug) }}">
                            </a>
                          @endforeach
                        </div>
                      </li>

                      @else

                      <a class="nav-link" href="{{ route('categories.show', $category->slug) }}">
                        {{ $category->name }}
                      </a>
                    @endif
                @endforeach
              @endforeach

            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">

                @if(Auth::check())

                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="{{route('logout')}}">Logout</a>

                @else

                <a class="dropdown-item" href="{{route('login')}}">Login</a>
                <a class="dropdown-item" href="{{route('register')}}">Register</a>

                @endif

              </div>
            </li>
            <li class="nav-item cta cta-colored"><a href="{{route('checkout.cart')}}" class="nav-link"><span class="icon-shopping_cart"></span>[{{ $cartCount }}]</a></li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->