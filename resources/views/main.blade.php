@extends('layouts.site')

@section('title')
    {{ $title.$page }}
@endsection

@section('content')

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

<h3 class="carousel-title">Produtos em desataque</h3>
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
        <h3 class="carousel-title">Mais vendidos</h3>
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
        <h3 class="carousel-title">Vendas</h3>

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
        <h3 class="carousel-title">Mais procurados</h3>
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

{{-- <div class="col-md-9 col-md-push-3">
</div> --}}
@endsection

;@section('widget-banner')
<div class="widget widget-banner">
    <div class="banner banner-image">
        <a href="#" title="Brown Woman Shoes">
            <img src="{{asset('site/images/banners/widget-banner.png')}}" alt="Banner name">
        </a>
    </div>
</div><!-- End .widget -->
@endsection

@section('widget-newsletter')
<div class="widget widget-newsletter">
    <h3 class="widget-title">Newsletter</h3>
    <p>Insira seu endereço de e-mail abaixo para assinar meu boletim informativo</p>

    <form action="#">
        <div class="form-group">
            <img src="{{asset('site/images/icon-newsletter-email.png')}}" alt="Email">
            <input type="email" class="form-control" placeholder="E-mail" required>
        </div><!-- End .form-group -->
        <input type="submit" value="Inscreva-se agora" class="btn btn-block">
    </form>
</div><!-- End .widget -->
@endsection

@section('widget-testimonial')
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
@endsection


