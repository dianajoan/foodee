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
            <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{ route('product.display') }}">Products</a>
                <a class="dropdown-item" href="{{ route('checkout') }}">Checkout</a>
                
              </div>
            </li>

            {{-- categories --}}
              <!-- {{ $vproducts = App\Models\Category::where('type','products-vegetables')->get() }} -->
              <!-- {{ $fproducts = App\Models\Category::where('type','products-fruits')->get() }} -->
              <!-- {{ $jproducts = App\Models\Category::where('type','products-juice')->get() }} -->
              <!-- {{ $dproducts = App\Models\Category::where('type','products-dried')->get() }} -->
           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                @foreach($vproducts as $product)
                  <a class="dropdown-item" href="{{ route('products.index',[$product->name,0]) }}">{{ $product->display_name }}</a>
                @endforeach
                @foreach($fproducts as $product)
                  <a class="dropdown-item" href="{{ route('products.index',[$product->name,0]) }}">{{ $product->display_name }}</a>
                @endforeach
                @foreach($jproducts as $product)
                  <a class="dropdown-item" href="{{ route('products.index',[$product->name,0]) }}">{{ $product->display_name }}</a>
                @endforeach
                @foreach($dproducts as $product)
                  <a class="dropdown-item" href="{{ route('products.index',[$product->name,0]) }}">{{ $product->display_name }}</a>
                @endforeach
              </div>
            </li>

            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">

                @if(Auth::check())

                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>

                @else

                <a class="dropdown-item" href="{{route('login')}}">Login</a>
                <a class="dropdown-item" href="{{route('register')}}">Register</a>

                @endif

              </div>
            </li>
            <li class="nav-item cta cta-colored"><a href="{{route('product.cart')}}" class="nav-link"><span class="icon-shopping_cart"></span>[{{Session::has('cart') ? Session::get('cart')->totalQty : ''}} ]</a></li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->