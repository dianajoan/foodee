@extends('layouts.master')
@section('title', 'Home')

@section('content')

<!-- add-products -->
    <div class="add-products">  
        <div class="container">
            <div class="add-products-row">
                <div class="w3ls-add-grids">
                    <a href="menu.html"> 
                        <h4>Get <span>20%<br>Cashback</span></h4>
                        <h5>Ordered in mobile app only </h5>
                        <h6>Order Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                    </a>
                </div>
                <div class="w3ls-add-grids w3ls-add-grids-right">
                    <a href="menu.html"> 
                        <h4>GET Upto<span><br>40% Offer</span></h4>
                        <h5>Sunday special discount</h5>
                        <h6>Order Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                    </a>
                </div> 
                <div class="clearfix"> </div> 
            </div>       
        </div>
    </div>
    <!-- //add-products --> 
    <!-- order -->      
    <div class="wthree-order">  
        <img src="{!! asset('images/i2.jpg') !!}" class="w3order-img" alt=""/>
        <div class="container">
            <h3 class="w3ls-title">How To Order Online Food</h3>
            <p class="w3lsorder-text">Get your favourite food in 4 simple steps.</p>
            <div class="order-agileinfo">  
                <div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
                    <div class="order-w3text"> 
                        <i class="fa fa-map" aria-hidden="true"></i> 
                        <h5>Search Area</h5>
                        <span>1</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
                    <div class="order-w3text"> 
                        <i class="fa fa-cutlery" aria-hidden="true"></i> 
                        <h5>Choose Food</h5>
                        <span>2</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
                    <div class="order-w3text"> 
                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                        <h5>Pay Money</h5>
                        <span>3</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
                    <div class="order-w3text"> 
                        <i class="fa fa-truck" aria-hidden="true"></i>
                        <h5>Enjoy Food</h5>
                        <span>4</span>
                    </div>
                </div>
                <div class="clearfix"> </div> 
            </div>
        </div>
    </div>
    <!-- //order -->    
    <!-- deals -->
    <div class="w3agile-deals">
        <div class="container">
            <h3 class="w3ls-title">Special Services</h3>
            <div class="dealsrow">
                <div class="col-md-6 col-sm-6 deals-grids">
                    <div class="deals-left">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                    </div> 
                    <div class="deals-right">
                        <h4>FREE DELIVERY</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                    </div> 
                    <div class="clearfix"> </div>
                </div> 
                <div class="col-md-6 col-sm-6 deals-grids">
                    <div class="deals-left">
                        <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                    </div> 
                    <div class="deals-right">
                        <h4>Party Orders</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                    </div> 
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 col-sm-6 deals-grids">
                    <div class="deals-left">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div> 
                    <div class="deals-right">
                        <h4>Team up Scheme</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                    </div>
                    <div class="clearfix"> </div>
                </div> 
                <div class="col-md-6 col-sm-6 deals-grids">
                    <div class="deals-left">
                        <i class="fa fa-building" aria-hidden="true"></i>
                    </div> 
                    <div class="deals-right">
                        <h4>corporate orders</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                    </div>
                    <div class="clearfix"> </div>
                </div> 
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //deals --> 
    <!-- dishes -->
    <div class="w3agile-spldishes">
        <div class="container">
            <h3 class="w3ls-title">Special Foods</h3>
            <div class="spldishes-agileinfo">
                <div class="col-md-3 spldishes-w3left">
                    <h5 class="w3ltitle">Staple Specials</h5>
                    <p>Vero vulputate enim non justo posuere placerat Phasellus mauris vulputate enim non justo enim .</p>
                </div> 
                <div class="col-md-9 spldishes-grids">
                    <!-- Owl-Carousel -->
                    <div id="owl-demo" class="owl-carousel text-center agileinfo-gallery-row">
                        <a href="products.html" class="item g1">
                            <img class="lazyOwl" src="{!! asset('images/g1.jpg') !!}" title="Our latest gallery" alt=""/>
                            <div class="agile-dish-caption">
                                <h4>Duis congue</h4>
                                <span>Neque porro quisquam est qui dolorem </span>
                            </div>
                        </a>
                        <a href="products.html" class="item g1">
                            <img class="lazyOwl" src="{!! asset('images/g2.jpg') !!}" title="Our latest gallery" alt=""/>
                            <div class="agile-dish-caption">
                                <h4>Duis congue</h4>
                                <span>Neque porro quisquam est qui dolorem </span>
                            </div>
                        </a>
                        <a href="products.html" class="item g1">
                            <img class="lazyOwl" src="{!! asset('images/g3.jpg') !!}" title="Our latest gallery" alt=""/>
                            <div class="agile-dish-caption">
                                <h4>Duis congue</h4>
                                <span>Neque porro quisquam est qui dolorem </span>
                            </div>
                        </a>
                        <a href="products.html" class="item g1">
                            <img class="lazyOwl" src="{!! asset('images/g4.jpg') !!}" title="Our latest gallery" alt=""/>
                            <div class="agile-dish-caption">
                                <h4>Duis congue</h4>
                                <span>Neque porro quisquam est qui dolorem </span>
                            </div>
                        </a>
                        <a href="products.html" class="item g1">
                            <img class="lazyOwl" src="{!! asset('images/g5.jpg') !!}" alt=""/>
                            <div class="agile-dish-caption">
                                <h4>Duis congue</h4>
                                <span>Neque porro quisquam est qui dolorem </span>
                            </div>
                        </a> 
                        <a href="products.html" class="item g1">
                            <img class="lazyOwl" src="{!! asset('images/g1.jpg') !!}" title="Our latest gallery" alt=""/>
                            <div class="agile-dish-caption">
                                <h4>Duis congue</h4>
                                <span>Neque porro quisquam est qui dolorem </span>
                            </div>
                        </a>
                        <a href="products.html" class="item g1">
                            <img class="lazyOwl" src="{!! asset('images/g2.jpg') !!}" title="Our latest gallery" alt=""/>
                            <div class="agile-dish-caption">
                                <h4>Duis congue</h4>
                                <span>Neque porro quisquam est qui dolorem </span>
                            </div>
                        </a>
                        <a href="products.html" class="item g1">
                            <img class="lazyOwl" src="{!! asset('images/g3.jpg') !!}" title="Our latest gallery" alt=""/>
                            <div class="agile-dish-caption">
                                <h4>Duis congue</h4>
                                <span>Neque porro quisquam est qui dolorem </span>
                            </div>
                        </a>
                    </div> 
                </div>  
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //dishes --> 
    <!-- subscribe -->
    <div class="subscribe agileits-w3layouts"> 
        <div class="container">
            <div class="col-md-6 social-icons w3-agile-icons">
                <h4>Keep in touch</h4>  
                <ul>
                    <li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
                    <li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
                    <li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
                    <li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
                    <li><a href="#" class="fa fa-rss icon rss"> </a></li> 
                </ul> 
                <ul class="apps"> 
                    <li><h4>Download Our app : </h4> </li>
                    <li><a href="#" class="fa fa-apple"></a></li>
                    <li><a href="#" class="fa fa-windows"></a></li>
                    <li><a href="#" class="fa fa-android"></a></li>
                </ul> 
            </div> 
            <div class="col-md-6 subscribe-right">
                <h3 class="w3ls-title">Subscribe to Our <br><span>Newsletter</span></h3>  
                <form action="#" method="post"> 
                    <input type="email" name="email" placeholder="Enter your Email..." required="">
                    <input type="submit" value="Subscribe">
                    <div class="clearfix"> </div> 
                </form>  
                <img src="{!! asset('images/i1.png') !!}" class="sub-w3lsimg" alt=""/>
            </div>
            <div class="clearfix"> </div> 
        </div>
    </div>
    <!-- //subscribe -->  
    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) { 
                }
            }
        });
    </script>  
    <!-- //cart-js -->  
    <!-- Owl-Carousel-JavaScript -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel ({
                items : 3,
                lazyLoad : true,
                autoPlay : true,
                pagination : true,
            });
        });
    </script>
    <!-- //Owl-Carousel-JavaScript -->  
    <!-- start-smooth-scrolling -->
    <script src="js/SmoothScroll.min.js"></script>  
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script> 
    <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
            
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
    </script>
    <!-- //end-smooth-scrolling -->   
    <!-- smooth-scrolling-of-move-up -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */
            
            $().UItoTop({ easingType: 'easeOutQuart' });
            
        });
    </script>
    <!-- //smooth-scrolling-of-move-up --> 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>

@endsection