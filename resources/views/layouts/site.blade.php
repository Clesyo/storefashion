<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Store Fashion - Sua loja virtual</title>
        <meta name="description" content="Store Fashion - Sua loja virtual">

        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Google Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('site/css/plugins.min.css')}}">
        <link rel="stylesheet" href="{{ asset('site/css/style.css')}}">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('site/images/icons/favicon.png')}}">

        <!-- Modernizr -->
        <script src="site/js/modernizr.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <header class="header sticky-header">
                <div class="container">
                    <a href="index.html" class="site-logo" title="Shopo - eCommerce Template">
                        <img src="{{asset('site/images/logo.png')}}" alt="Logo">
                        <span class="sr-only">Shopo - eCommerce Template</span>
                    </a>

                    <div class="header-dropdowns">
                        <div class="dropdown header-dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
                                USD
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#" title="Euro">EUR</a></li>
                                <li><a href="#" title="Pound">PND</a></li>
                                <li><a href="#" title="Yen">YEN</a></li>
                            </ul>
                        </div><!-- End .dropddown -->

                        <div class="dropdown header-dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
                                ENG
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#" title="Spanish">SPA</a></li>
                                <li><a href="#" title="Turkish">TUR</a></li>
                                <li><a href="#" title="German">GER</a></li>
                            </ul>
                        </div><!-- End .dropddown -->
                    </div><!-- End .header-dropdowns -->

                    <div class="search-form-container">
                        <a href="#" class="search-form-toggle" title="Toggle Search"><i class="fa fa-search"></i></a>
                        <form action="#">
                            <div class="dropdown search-dropdown">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
                                   All Category
                                    <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="#">Furniture</a></li>
                                    <li><a href="#">Equipments</a></li>
                                </ul>
                            </div><!-- End .dropddown -->
                            <input type="search" class="form-control" placeholder="Search" required>
                            <button type="submit" title="Search" class="btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div><!-- End .search-form-container -->

                    <ul class="top-links">
                        <li><a href="signin.html">Sign In</a></li>
                        <li><a href="cart.html">Cart</a></li>
                    </ul>

                    <div class="dropdown cart-dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="cart-icon">
                                <img src="{{asset('site/images/bag.png')}}" alt="Cart">
                                <span class="cart-count">4</span>
                            </span>
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <p class="dropdown-cart-info">You have 2 products in your cart.</p>
                            <div class="dropdown-menu-wrapper">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name">
                                            <img src="{{asset('site/images/products/small/product2.jpg')}}" alt="Product Image">
                                        </a>
                                    </figure>

                                    <div>
                                        <a href="#" class="btn-delete" title="Delete product" role="button"></a>
                                        <h4 class="product-title"><a href="product.html">Sunglasses</a></h4>
                                        <div class="product-price-container">
                                            <span class="product-price">$110.00</span>
                                        </div><!-- End .product-price-container -->
                                        <div class="product-qty">x1</div><!-- End .product-qty -->
                                    </div><!-- End .product-image-container -->
                                </div><!-- End .product- -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name">
                                            <img src="{{asset('site/images/products/small/product1.jpg')}}" alt="Product Image">
                                        </a>
                                    </figure>

                                    <div>
                                        <a href="#" class="btn-delete" title="Delete product" role="button"></a>
                                        <h4 class="product-title"><a href="product.html">Leather Belt</a></h4>
                                        <div class="product-price-container">
                                            <span class="product-price">$99.00</span>
                                        </div><!-- End .product-price-container -->
                                        <div class="product-qty">x1</div><!-- End .product-qty -->
                                    </div><!-- End .product-image-container -->
                                </div><!-- End .product- -->
                            </div><!-- End .droopdowm-menu-wrapper -->

                            <div class="cart-dropdowm-action">
                                <div class="dropdowm-cart-total"><span>TOTAL:</span> $209.00</div>
                                <a href="checkout.html" class="btn btn-primary">Checkout</a>
                            </div><!-- End .cart-dropdown-action -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .cart-dropddown -->

                    <a href="#" class="sidemenu-btn" title="Menu Toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div><!-- End .container-fluid -->
            </header><!-- End .header -->

            <aside class="sidemenu">
                <div class="sidemenu-wrapper">
                    <div class="sidemenu-header">
                        <a href="index.html" class="sidemenu-logo">
                            <img src="{{asset('site/images/logo.png')}}" alt="logo">
                        </a>
                    </div><!-- End .sidemenu-header -->

                    <ul class="metismenu">
                        <li><a href="index.html">Home</a></li>
                        <li>
                            <a href="#" aria-expanded="false">Pages <span class="sidemenu-icon"></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" aria-expanded="false">Shop <span class="sidemenu-icon"></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="category.html">Category</a></li>
                                <li><a href="product.html">Product</a></li>
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="signin.html">Sign In</a></li>
                                <li><a href="signup.html">Sign Up</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" aria-expanded="false">Portfolio<span class="sidemenu-icon"></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="portfolio-2col.html">Portfolio 2 Col</a></li>
                                <li><a href="portfolio-3col.html">Portfolio 3 Col</a></li>
                                <li><a href="portfolio-4col.html">Portfolio 4 Col</a></li>
                                <li><a href="single-portfolio.html">Portfolio Post</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" aria-expanded="false">Blog<span class="sidemenu-icon"></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="single.html">blog Post</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="#">Buy Shopo!</a></li>
                    </ul>
                </div><!-- End .sidemenu-wrapper -->
            </aside><!-- End .sidemenu -->
            <div class="sidemenu-overlay"></div><!-- End .sidemenu-overlay -->

            <div class="main">
                @yield('content')
            </div><!-- End .main -->
        </div>

        <footer class="footer">
            <div class="container">
                <div class="info-bar">
                    <div class="info-bar-col">
                        <h5 class="info-bar-title">FREE SHIPPING &amp; RETURN</h5>
                        <p>Free shipping on all orders over $99</p>
                    </div><!-- End .info-bar-col -->
                    <div class="info-bar-col">
                        <h5 class="info-bar-title">MONEY BACK GUARANTEE</h5>
                        <p>100% money back guarantee</p>
                    </div><!-- End .info-bar-col -->
                    <div class="info-bar-col">
                        <h5 class="info-bar-title">ONLINE SUPPORT 24/7</h5>
                        <p>Highly customer satisfaction</p>
                    </div><!-- End .info-bar-col -->
                </div><!-- End .info-bar -->
            </div><!-- End .container -->
            <div class="footer-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="widget widget-about">
                                <h4 class="widget-title">Contact Information</h4>

                                <address>
                                    <span>123 Shopo St</span>
                                    <span>Commerce Land, EC 12345</span>
                                    <span>+123 456 7890</span>
                                    <a href="mailto:info@domain.com">info@domain.com</a>
                                </address>
                            </div><!-- End .widget -->
                        </div><!-- End .col-md-3 -->

                        <div class="col-sm-6 col-md-3">
                            <div class="widget">
                                <h4 class="widget-title">Collection</h4>

                                <ul class="links">
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="#">Home &amp; Garden</a></li>
                                    <li><a href="#">Music</a></li>
                                    <li><a href="#">Sports</a></li>
                                    <li><a href="#">Motors</a></li>
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-md-3 -->

                        <div class="clearfix visible-sm"></div><!-- clearfix -->

                        <div class="col-sm-6 col-md-3">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4>

                                <ul class="links">
                                    <li><a href="#">Account</a></li>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">My cart</a></li>
                                    <li><a href="#">Wishlist</a></li>
                                    <li><a href="#">Checkout</a></li>
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-md-3 -->

                        <div class="col-sm-6 col-md-3">
                            <div class="widget widget-newsletter">
                                <h4 class="widget-title">Newsletter</h4>
                                <p>Signup for our newsletter</p>

                                <form action="#">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email" required>
                                        <input type="submit" value="GO" class="btn">
                                    </div><!-- End .form-group -->
                                </form>

                                <div class="social-icons">
                                    <a href="#" class="social-icon" title="Facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="social-icon" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div><!-- End .widget -->
                        </div><!-- End .col-md-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-inner -->

            <div class="footer-bottom">
                <div class="container">
                    <p class="copyright">Storo Fashion &copy; {{date('Y')}}. Todo os direitos reservados.</p>
                <img src="{{asset('site/images/cards.png')}}" alt="Payment Methods" class="img-cards">
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End #wrapper -->

    <a id="scroll-top" href="#top" title="Scroll top"><i class="fa fa-angle-up"></i></a>

    <!-- End -->
    <script src="{{ asset('site/js/plugins.js') }}"></script>
    <script src="{{ asset('site/js/main.js') }}"></script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{ asset('site/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
    (Load Extensions only on Local File Systems !
    The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="{{ asset('site/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/extensions/revolution.extension.video.min.js') }}"></script>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            "use strict";

            var revapi;
            if ( $("#rev_slider").revolution == undefined ) {
                revslider_showDoubleJqueryError("#rev_slider");
            } else {
                revapi = $("#rev_slider").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "assets/js/",
                    sliderLayout: "auto",
                    dottedOverlay:"none",
                    delay: 15000,
                    navigation: {
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on"
                        },
                        arrows: {
                            style: "custom",
                            enable: true,
                            hide_onmobile: false,
                            hide_under: 768,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "bottom",
                                h_offset: 63,
                                v_offset: 48
                            },
                            right: {
                                h_align: "left",
                                v_align: "bottom",
                                h_offset: 85,
                                v_offset: 48
                            }
                        },
                        bullets: {
                            enable: false
                        }
                    },
                    responsiveLevels: [1200,992,768,480],
                    gridwidth: [870,679,640,480],
                    gridheight: [468,400,360,300],
                    lazyType: "smart",
                    spinner: "spinner2",
                    parallax: {
                        type: "off"
                    },
                    debugMode: false
                });
            }
        });
    </script>
    </body>
</html>
