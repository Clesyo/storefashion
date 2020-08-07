@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-push-3">
            <div id="rev_slider_wrapper" class="slider-container rev_slider_wrapper fullwidthbanner-container">
                <div id="rev_slider" class="rev_slider fullwidthabanner" style="display:none;">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-transition="fade">
                            <!-- Background Image -->
                            <img src="{{asset('site/images/transparent.png')}}" class="rev-slidebg" style="background-color: #eeebe7;" alt="Slider bg">

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

                            ><img src="{{asset('site/images/slider/item1.png')}}" alt="Item" width="452" height="428" data-ww="['452px', '380px', '300px', '240px']" data-hh="['428px', '359px', '331px', '227px']"></div>
                        </li>

                        <!-- SLIDE  -->
                        <li data-transition="fade">
                            <!-- Background Image -->
                            <img src="{{asset('site/images/transparent.png')}}" class="rev-slidebg" style="background-color: #eeebe7;" alt="Slider bg">

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
                                <img src="{{asset('site/images/slider/item2.png')}}" alt="Item" width="365" height="454" data-ww="['365px', '300px', '240px', '200px']" data-hh="['454px', '373px', '298px', '248px']">
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
                            <img class="owl-lazy" src="{{asset('site/images/blank.png')}}" data-src="{{asset('site/images/products/product5.jpg')}}" width="195" height="255" alt="Product Image">
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
                            <img class="owl-lazy" src="{{asset('site/images/blank.png')}}" data-src="{{asset('site/images/products/product10.jpg')}}" width="195" height="255" alt="Product Image">
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
                            <img class="owl-lazy" src="{{asset('site/images/blank.png')}}" data-src="{{asset('site/images/products/product11.jpg')}}" width="195" height="255" alt="Product Image">
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
                            <img class="owl-lazy" src="{{asset('site/images/blank.png')}}" data-src="{{asset('site/images/products/product12.jpg')}}" width="195" height="255" alt="Product Image">
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
                            <img class="owl-lazy" src="{{asset('site/images/blank.png')}}" data-src="{{asset('site/images/products/product14.jpg')}}" width="195" height="255" alt="Product Image">
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
                    <a href="#"><img src="{{asset('site/images/banners/banner-full.jpg')}}" alt="Banner"></a>
                </div><!-- End .banner-image-wrapper -->
            </div><!-- end .banner -->

            <div class="row">
                <div class="col-sm-4">
                    <h3 class="carousel-title">BEST SELLER</h3>
                    <ul class="products-list">
                        <li class="product">
                            <figure class="product-image-container">
                                <a href="product.html">
                                    <img src="{{asset('site/images/products/small/product1.jpg')}}" alt="Product">
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
                                    <img src="{{asset('site/images/products/small/product2.jpg')}}" alt="Product">
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
                                    <img src="{{ asset('site/images/products/small/product3.jpg')}}" alt="Product">
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
                                    <img src="{{asset('site/images/products/small/product4.jpg')}}" alt="Product">
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
                                <img src="{{asset('site/images/banners/wanted-banner.jpg')}}" alt="Banner">
                            </a>

                            <div class="wanted-banner-content">
                                <h4>Off<span>58%</span></h4>
                            </div><!-- End .wanter-banner-content -->
                        </div><!-- End .banner -->
                        <div class="banner banner-image">
                            <a href="#">
                                <img src="{{asset('site/images/banners/wanted-banner-2.jpg')}}" alt="Banner">
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

        <aside class="col-md-3 col-md-pull-9 sidebar sidebar-shop">
            <div class="widget widget-box widget-shop-category active">
                <h3 class="widget-title">Category <a href="#" class="btn-filter" role="button">Filter<i class="fa fa-caret-down"></i></a></h3>

                <ul class="shop-category-list accordion">
                    <li>
                        <a href="category.html">Fashion</a>
                        <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-1" aria-expanded="false" aria-controls="accordion-ul-1"><span class="accordion-icon"></span></button>

                        <ul class="collapse" id="accordion-ul-1" aria-expanded="false">
                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Women Clothes</a></li>
                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Men Clothes</a></li>
                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Shoes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="category.html">Electronics </a>
                        <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-2" aria-expanded="false" aria-controls="accordion-ul-2"><span class="accordion-icon"></span></button>

                        <ul class="collapse" id="accordion-ul-2" aria-expanded="false">
                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Computers</a></li>
                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Mobile Phones</a></li>
                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Tablets</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="category.html">Home &amp; Garden</a>
                        <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-3" aria-expanded="false" aria-controls="accordion-ul-3"><span class="accordion-icon"></span></button>

                        <ul class="collapse" id="accordion-ul-3" aria-expanded="false">
                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Bedding</a></li>
                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Furniture</a></li>
                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Home Decor</a></li>
                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Kitchen, Dining &amp; Bar</a></li>
                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Gardening Supplies</a></li>
                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Outdoor Lightning</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="category.html">Music Instruments</a>
                        <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-4" aria-expanded="false" aria-controls="accordion-ul-4"><span class="accordion-icon"></span></button>

                        <ul class="collapse" id="accordion-ul-4" aria-expanded="false">
                            <li><a href="category.html"><i class="fa fa-caret-right"></i>SubCategory</a></li>
                            <li><a href="category.html"><i class="fa fa-caret-right"></i>SubCategory</a></li>
                            <li><a href="category.html"><i class="fa fa-caret-right"></i>SubCategory</a></li>
                            <li><a href="category.html"><i class="fa fa-caret-right"></i>SubCategory</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="category.html">Sports Equipments</a>
                    </li>
                    <li>
                        <a href="category.html">Motors Products</a>
                    </li>
                    <li>
                        <a href="category.html">Shopo Pages</a>
                        <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-5" aria-expanded="false" aria-controls="accordion-ul-5"><span class="accordion-icon"></span></button>

                        <ul class="collapse" id="accordion-ul-5" aria-expanded="false">
                            <li><a href="about.html"><i class="fa fa-caret-right"></i>About</a></li>
                            <li><a href="portfolio-4col.html"><i class="fa fa-caret-right"></i>Portfolio 4 Columns</a></li>
                            <li><a href="portfolio-3col.html"><i class="fa fa-caret-right"></i>Portfolio 3 Columns</a></li>
                            <li><a href="portfolio-2col.html"><i class="fa fa-caret-right"></i>Portfolio 2 Columns</a></li>
                            <li><a href="single-portfolio.html"><i class="fa fa-caret-right"></i>Portfolio Post</a></li>
                            <li><a href="blog.html"><i class="fa fa-caret-right"></i>Blog</a></li>
                            <li><a href="single.html"><i class="fa fa-caret-right"></i>Blog Post</a></li>
                            <li><a href="contact.html"><i class="fa fa-caret-right"></i>Contact</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Buy Theme</a>
                    </li>
                </ul>
            </div><!-- End .widget -->

            <div class="widget widget-box widget-shop-filter">
                <h3 class="widget-title">Filter <a href="#" class="btn-category" role="button">Categories<i class="fa fa-caret-down"></i></a></h3>

                    <div class="filter-box">
                        <h5 class="filter-label">Sort By</h5>
                        <ul class="shop-filter-list">
                            <li><a href="#"><i class="fa fa-caret-right"></i>Default</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>Popularity</a></li>
                            <li class="active"><a href="#"><i class="fa fa-caret-right"></i>Average Rating</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>Newness</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>Price: Low to high</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>Price: high to Low</a></li>
                        </ul>
                    </div><!-- End .filter-box -->

                    <div class="filter-box">
                        <h5 class="filter-label">Price <span class="filter-price-text"><span class="filter-price-prefix">$</span><span id="filter-price-range"></span></span></h5>
                        <div class="price-slider-wrapper">
                            <div id="price-slider"></div><!-- End #price-slider -->
                        </div><!-- End .price-slider-wrapper -->
                    </div><!-- End .filter-box -->

                    <div class="filter-box">
                        <h5 class="filter-label">Color</h5>
                        <div class="row">
                            <div class="col-xs-6">
                                <ul class="filter-color-list">
                                    <li>
                                        <span class="filter-color" style="background-color: #1e73be;"></span>
                                        <span class="filter-color-text">Blue</span>
                                    </li>
                                    <li>
                                        <span class="filter-color" style="background-color: #c0c0c0;"></span>
                                        <span class="filter-color-text">Gray</span>
                                    </li>
                                    <li>
                                        <span class="filter-color" style="background-color: #dc9814;"></span>
                                        <span class="filter-color-text">Orange</span>
                                    </li>
                                </ul>
                            </div><!-- End col-xs-6 -->

                            <div class="col-xs-6">
                                <ul class="filter-color-list">
                                    <li>
                                        <span class="filter-color" style="background-color: #736751;"></span>
                                        <span class="filter-color-text">Brown</span>
                                    </li>
                                    <li>
                                        <span class="filter-color" style="background-color: #05ac92;"></span>
                                        <span class="filter-color-text">Green</span>
                                    </li>
                                    <li>
                                        <span class="filter-color" style="background-color: #fff;"></span>
                                        <span class="filter-color-text">White</span>
                                    </li>
                                </ul>
                            </div><!-- End col-xs-6 -->
                        </div><!-- End row -->
                    </div><!-- End .filter-box -->

                    <a href="#" class="btn btn-apply btn-block">Apply Filter</a>
            </div><!-- End .widget -->

            <div class="widget widget-banner">
                <div class="banner banner-image">
                    <a href="#" title="Brown Woman Shoes">
                        <img src="{{asset('site/images/banners/widget-banner.png')}}" alt="Banner name">
                    </a>
                </div>
            </div><!-- End .widget -->

            <div class="widget widget-newsletter">
                <h3 class="widget-title">Newsletter</h3>
                <p>Enter your email address below to subscribe to my newsletter</p>

                <form action="#">
                    <div class="form-group">
                        <img src="{{asset('site/images/icon-newsletter-email.png')}}" alt="Email">
                        <input type="email" class="form-control" placeholder="Email Address" required>
                    </div><!-- End .form-group -->
                    <input type="submit" value="subscribe now" class="btn btn-block">
                </form>
            </div><!-- End .widget -->

            <div class="widget widget-testimonial">
                <div class="owl-data-carousel owl-carousel"
                data-owl-settings='{ "items":1, "margin": 5, "loop": false, "nav": false, "dots":true }'>
                    <div class="testimonial">
                        <img src="{{asset('site/images/testimonials/user1.png')}}" alt="User image">
                        <h5 class="testimonial-owner">John Smith</h5>
                        <div class="testimonial-owner-position">Ceo &amp; Founder Okler</div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div><!-- End .testimonial -->

                    <div class="testimonial">
                        <img src="{{asset('site/images/testimonials/user2.png')}}" alt="User image">
                        <h5 class="testimonial-owner">Susan Smith</h5>
                        <div class="testimonial-owner-position">CPO &amp; Co-Founder</div>
                        <p>Distinctio, corrupti nesciunt aperiam, eaque, reiciendis dummy consequunt.</p>
                    </div><!-- End .testimonial -->

                    <div class="testimonial">
                        <img src="{{asset('site/images/testimonials/user3.png')}}" alt="User image">
                        <h5 class="testimonial-owner">David Lee</h5>
                        <div class="testimonial-owner-position">Senior Developer</div>
                        <p>Adipisci esse nobis alias magnam dolores debitis non odit porro nost.</p>
                    </div><!-- End .testimonial -->
                </div><!-- End .owl-data-carousel -->
            </div><!-- End .widget -->
        </aside><!-- End .col-md-3 -->
    </div><!-- End .row -->
</div><!-- End .container -->
@endsection


