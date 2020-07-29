<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Shopo - eCommerce Template</title>
        <meta name="description" content="Premium eCommerce Template">

        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                                <img src="site/images/bag.png" alt="Cart">
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
                                            <img src="site/images/products/small/product2.jpg" alt="Product Image">
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
                                            <img src="site/images/products/small/product1.jpg" alt="Product Image">
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
                            <img src="assets/images/logo.png" alt="logo">
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
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3">
                            <div id="rev_slider_wrapper" class="slider-container rev_slider_wrapper fullwidthbanner-container">
                                <div id="rev_slider" class="rev_slider fullwidthabanner" style="display:none;">
                                    <ul>
                                        <!-- SLIDE  -->
                                        <li data-transition="fade">
                                            <!-- Background Image -->
                                            <img src="assets/images/transparent.png" class="rev-slidebg" style="background-color: #eeebe7;" alt="Slider bg">

                                            <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-primary"
                                                data-x="['left','left','left','left']" data-hoffset="['68','50','45','30']"
                                                data-y="['center','center','center','center']" data-voffset="['-44','-36','-30','-24']"
                                                data-fontsize="['26','24','22','20']"
                                                data-fontweight="400"
                                                data-lineheight="['36','34','32','30']"
                                                data-width="none"
                                                data-height="none"
                                                data-whitespace="nowrap"
                                                data-frames='[{"delay":600,"speed":800,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                                data-responsive_offset="on"
                                                data-elementdelay="0"
                                                style="z-index: 5; white-space: nowrap; letter-spacing: 0.08em; text-transform: uppercase; font-family:'Oswald', sans-serif;">
                                                Vintage Style<br>Furnitures
                                            </div>

                                            <a class="tp-caption tp-resizeme rs-parallaxlevel-0"
                                                data-x="['left','left','left','left']" data-hoffset="['68','50','45','30']"
                                                data-y="['center','center','center','center']" data-voffset="['40','36','32','30']"
                                                data-width="none"
                                                data-height="none"
                                                data-fontsize="['13','12','11','10']"
                                                data-fontweight="400"
                                                data-lineheight="['21','20','18','16']"
                                                data-color="#7e6f5c"
                                                data-whitespace="nowrap"
                                                data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                                data-responsive_offset="on"
                                                style="z-index: 7; letter-spacing: 0.075em; text-transform: uppercase; text-decoration: underline;" href="category.html">
                                                Shop Now
                                            </a>

                                            <div class="tp-caption tp-resizeme"
                                                data-frames='[{"delay":600,"speed":1000,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                                data-type="image"
                                                data-x="['right','right','right','right']" data-hoffset="['110','90','80','60']"
                                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                                data-width="none"
                                                data-height="none"

                                            ><img src="assets/images/slider/item1.png" alt="Item" width="452" height="428" data-ww="['452px', '380px', '300px', '240px']" data-hh="['428px', '359px', '331px', '227px']"></div>
                                        </li>

                                        <!-- SLIDE  -->
                                        <li data-transition="fade">
                                            <!-- Background Image -->
                                            <img src="assets/images/transparent.png" class="rev-slidebg" style="background-color: #eeebe7;" alt="Slider bg">

                                            <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-primary"
                                                data-x="['left','left','left','left']" data-hoffset="['68','50','45','30']"
                                                data-y="['center','center','center','center']" data-voffset="['-44','-36','-30','-24']"
                                                data-fontsize="['26','24','22','20']"
                                                data-fontweight="400"
                                                data-lineheight="['36','34','32','30']"
                                                data-width="none"
                                                data-height="none"
                                                data-whitespace="nowrap"
                                                data-frames='[{"delay":600,"speed":800,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                                data-responsive_offset="on"
                                                data-elementdelay="0"
                                                style="z-index: 5; white-space: nowrap; letter-spacing: 0.08em; text-transform: uppercase; font-family:'Oswald', sans-serif;">
                                                Modern Style<br>Furnitures
                                            </div>

                                            <a class="tp-caption tp-resizeme rs-parallaxlevel-0"
                                                data-x="['left','left','left','left']" data-hoffset="['68','50','45','30']"
                                                data-y="['center','center','center','center']" data-voffset="['40','36','32','30']"
                                                data-width="none"
                                                data-height="none"
                                                data-fontsize="['13','12','11','10']"
                                                data-fontweight="400"
                                                data-lineheight="['21','20','18','16']"
                                                data-color="#7e6f5c"
                                                data-whitespace="nowrap"
                                                data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                                data-responsive_offset="on"
                                                style="z-index: 7; letter-spacing: 0.075em; text-transform: uppercase; text-decoration: underline;" href="category.html">
                                                Shop Now
                                            </a>

                                            <div class="tp-caption tp-resizeme"
                                                data-frames='[{"delay":600,"speed":1000,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                                data-type="image"
                                                data-x="['right','right','right','right']" data-hoffset="['140','120','100','80']"
                                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                                data-width="none"
                                                data-height="none">
                                                <img src="assets/images/slider/item2.png" alt="Item" width="365" height="454" data-ww="['365px', '300px', '240px', '200px']" data-hh="['454px', '373px', '298px', '248px']">
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="tp-bannertimer tp-bottom" style="display:none; height: 2px; background-color: rgba(0, 0, 0, 0.2);"></div>
                                </div><!-- End #rev_slider -->
                            </div><!-- END REVOLUTION SLIDER -->

                            <h3 class="carousel-title">Featured Product</h3>
                            <div class="owl-data-carousel owl-carousel"
                            data-owl-settings='{ "items":4, "nav": true, "dots":false }'
                            data-owl-responsive='{ "480": {"items": 2}, "768": {"items": 3}, "992": {"items": 3}, "1200": {"items": 4} }'>
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name" class="product-image-link">
                                            <img class="owl-lazy" src="assets/images/blank.png" data-src="assets/images/products/product5.jpg" width="195" height="255" alt="Product Image">
                                        </a>
                                        <span class="product-label">-55%</span>
                                        <a href="#" class="btn-quick-view">Quick View</a>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                                <i class="icon-product icon-heart"></i>
                                            </a>
                                            <a href="#" class="btn-product btn-add-cart" title="Add to Bag">
                                                <i class="icon-product icon-bag"></i>
                                                <span>Add to Bag</span>
                                            </a>
                                            <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                                <i class="icon-product icon-bar"></i>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </figure>
                                    <h3 class="product-title">
                                        <a href="product.html">Chandelier bulb</a>
                                    </h3>
                                    <div class="product-price-container">
                                        <span class="product-price">$250.00</span>
                                    </div><!-- Endd .product-price-container -->
                                </div><!-- End .product -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name" class="product-image-link">
                                            <img class="owl-lazy" src="assets/images/blank.png" data-src="assets/images/products/product10.jpg" width="195" height="255" alt="Product Image">
                                        </a>
                                        <a href="#" class="btn-quick-view">Quick View</a>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                                <i class="icon-product icon-heart"></i>
                                            </a>
                                            <a href="#" class="btn-product btn-add-cart" title="Add to Bag">
                                                <i class="icon-product icon-bag"></i>
                                                <span>Add to Bag</span>
                                            </a>
                                            <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                                <i class="icon-product icon-bar"></i>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </figure>
                                    <h3 class="product-title">
                                        <a href="product.html">Dining chair</a>
                                    </h3>
                                    <div class="product-price-container">
                                        <span class="product-price">$130.00</span>
                                    </div><!-- Endd .product-price-container -->
                                </div><!-- End .product -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name" class="product-image-link">
                                            <img class="owl-lazy" src="assets/images/blank.png" data-src="assets/images/products/product11.jpg" width="195" height="255" alt="Product Image">
                                        </a>
                                        <a href="#" class="btn-quick-view">Quick View</a>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                                <i class="icon-product icon-heart"></i>
                                            </a>
                                            <a href="#" class="btn-product btn-add-cart" title="Add to Bag">
                                                <i class="icon-product icon-bag"></i>
                                                <span>Add to Bag</span>
                                            </a>
                                            <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                                <i class="icon-product icon-bar"></i>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </figure>
                                    <h3 class="product-title">
                                        <a href="product.html">Woolen scarf</a>
                                    </h3>
                                    <div class="product-price-container">
                                        <span class="product-price">$95.00</span>
                                    </div><!-- Endd .product-price-container -->
                                </div><!-- End .product -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name" class="product-image-link">
                                            <img class="owl-lazy" src="assets/images/blank.png" data-src="assets/images/products/product12.jpg" width="195" height="255" alt="Product Image">
                                        </a>
                                        <a href="#" class="btn-quick-view">Quick View</a>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                                <i class="icon-product icon-heart"></i>
                                            </a>
                                            <a href="#" class="btn-product btn-add-cart" title="Add to Bag">
                                                <i class="icon-product icon-bag"></i>
                                                <span>Add to Bag</span>
                                            </a>
                                            <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                                <i class="icon-product icon-bar"></i>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </figure>
                                    <h3 class="product-title">
                                        <a href="product.html">Tripod lampshade</a>
                                    </h3>
                                    <div class="product-price-container">
                                        <span class="product-price">$180.00</span>
                                    </div><!-- Endd .product-price-container -->
                                </div><!-- End .product -->

                               <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name" class="product-image-link">
                                            <img class="owl-lazy" src="assets/images/blank.png" data-src="assets/images/products/product14.jpg" width="195" height="255" alt="Product Image">
                                        </a>
                                        <a href="#" class="btn-quick-view">Quick View</a>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                                <i class="icon-product icon-heart"></i>
                                            </a>
                                            <a href="#" class="btn-product btn-add-cart" title="Add to Bag">
                                                <i class="icon-product icon-bag"></i>
                                                <span>Add to Bag</span>
                                            </a>
                                            <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                                <i class="icon-product icon-bar"></i>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </figure>
                                    <h3 class="product-title">
                                        <a href="product.html">Ceiling lights</a>
                                    </h3>
                                    <div class="product-price-container">
                                        <span class="product-price">$140.00</span>
                                    </div><!-- Endd .product-price-container -->
                                </div><!-- End .product -->
                            </div><!-- End .owl-data-carousel -->

                            <div class="mb30 mb10-xs"></div><!-- margin -->

                            <div class="banner banner-fullwidth">
                                <div class="banner-content-wrapper">
                                    <h3>Home &amp; Garden</h3>
                                    <p>Starting at</p>
                                    <div class="banner-price">$352.00<span>$452.00</span></div>
                                    <a href="#">Shop Now</a>
                                </div><!-- End .banner-content-wrapper -->
                                <div class="banner-image-wrapper">
                                    <a href="#"><img src="assets/images/banners/banner-full.jpg" alt="Banner"></a>
                                </div><!-- End .banner-image-wrapper -->
                            </div><!-- end .banner -->

                            <div class="row">
                                <div class="col-sm-4">
                                    <h3 class="carousel-title">BEST SELLER</h3>
                                    <ul class="products-list">
                                        <li class="product">
                                            <figure class="product-image-container">
                                                <a href="product.html">
                                                    <img src="assets/images/products/small/product1.jpg" alt="Product">
                                                </a>
                                            </figure>
                                            <div>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .ratings-container -->
                                                <h4 class="product-title">
                                                    <a href="product.html">Leather belt</a>
                                                </h4>
                                                <div class="product-price-container">
                                                    <span class="product-price">$85.00</span>
                                                </div><!-- End .product-price-container -->
                                            </div>
                                        </li>

                                        <li class="product">
                                            <figure class="product-image-container">
                                                <a href="product.html">
                                                    <img src="assets/images/products/small/product2.jpg" alt="Product">
                                                </a>
                                            </figure>
                                            <div>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .ratings-container -->
                                                <h4 class="product-title">
                                                    <a href="product.html">Sunglasses</a>
                                                </h4>
                                                <div class="product-price-container">
                                                    <span class="product-price">$110.00</span>
                                                </div><!-- End .product-price-container -->
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- End .col-sm-4 -->
                                <div class="col-sm-4">
                                    <h3 class="carousel-title">SALE</h3>

                                    <ul class="products-list">
                                        <li class="product">
                                            <figure class="product-image-container">
                                                <a href="product.html">
                                                    <img src="assets/images/products/small/product3.jpg" alt="Product">
                                                </a>
                                            </figure>
                                            <div>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .ratings-container -->
                                                <h4 class="product-title">
                                                    <a href="product.html">T-shirts</a>
                                                </h4>
                                                <div class="product-price-container">
                                                    <span class="product-price">$99.00</span>
                                                </div><!-- End .product-price-container -->
                                            </div>
                                        </li>

                                        <li class="product">
                                            <figure class="product-image-container">
                                                <a href="product.html">
                                                    <img src="assets/images/products/small/product4.jpg" alt="Product">
                                                </a>
                                            </figure>
                                            <div>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .ratings-container -->
                                                <h4 class="product-title">
                                                    <a href="product.html">Chandelier bulb</a>
                                                </h4>
                                                <div class="product-price-container">
                                                    <span class="product-price">$250.00</span>
                                                </div><!-- End .product-price-container -->
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- End .col-sm-4 -->
                                <div class="col-sm-4">
                                    <h3 class="carousel-title">Most Wanted</h3>
                                    <div class="owl-data-carousel owl-carousel"
                                    data-owl-settings='{ "items":1, "margin": 5, "loop": false, "nav": true, "dots":false }'>
                                        <div class="banner banner-image">
                                            <a href="#">
                                                <img src="assets/images/banners/wanted-banner.jpg" alt="Banner">
                                            </a>

                                            <div class="wanted-banner-content">
                                                <h4>Off<span>58%</span></h4>
                                            </div><!-- End .wanter-banner-content -->
                                        </div><!-- End .banner -->
                                        <div class="banner banner-image">
                                            <a href="#">
                                                <img src="assets/images/banners/wanted-banner-2.jpg" alt="Banner">
                                            </a>
                                            <div class="wanted-banner-content">
                                                <h4>Off<span>42%</span></h4>
                                            </div><!-- End .wanter-banner-content -->
                                        </div><!-- End .banner -->
                                    </div><!-- End .owl-data-carousel -->
                                </div><!-- End .col-sm-4 -->
                            </div><!-- End .row -->

                            <div class="mb50 visible-sm visible-xs"></div><!-- margin -->
                        </div><!-- End .col-md-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .main -->
        </div>
    </body>
</html>
