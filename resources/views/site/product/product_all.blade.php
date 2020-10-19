@extends('layouts.site')

@section('title')
    {{ $title.$page }}
@endsection

@section('content')
<div class="banner banner-top">
    <img src="{{asset('site/images/banners/banner-top.jpg')}}" alt="Banner">
    <div class="banner-content">
        <h2>SAve big on<br>Home Decor</h2>
        <a href="#" class="action-link">Shop now</a>
    </div>
</div><!-- End .banner -->
<div class="category-header">
    <h1>Home Decor</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home &amp; Garden</a></li>
        <li class="active">Home Decor</li>
    </ol>
</div>
<div class="shop-row">
    <div class="shop-container max-col-4" data-layout="fitRows">

        @foreach ($products as $product)
            <div class="product-item">
                <div class="product">
                    <figure class="product-image-container">
                        <a href="product.html" title="{{ $product->description }}" class="product-image-link">
                            <img src="{{asset('storage/'.$product->image_default)}}" alt="Product Image">
                        </a>
                        {{-- <span class="product-label">-55%</span> --}}
                        {{-- <a href="#" class="btn-quick-view">Quick View</a> --}}

                        <div class="product-action">
                            {{-- <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                <i class="icon-product icon-heart"></i>
                            </a> --}}
                            <a href="#" class="btn-product btn-add-cart" title="Adicionar ao carrinho">
                                <i class="icon-product icon-bag"></i>
                                <span>Adicionar ao carrinho</span>
                            </a>
                            {{-- <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                <i class="icon-product icon-bar"></i>
                            </a> --}}
                        </div><!-- End .product-action -->
                    </figure>
                    <h3 class="product-title">
                        <a href="product.html">{{ $product->description }}</a>
                    </h3>
                    <div class="product-price-container">
                        <span class="product-price">R$ {{ number_format($product->price,2,",",".")  }}</span>
                    </div><!-- Endd .product-price-container -->
                </div><!-- End .product -->
            </div><!-- End .product-item -->
        @endforeach

    </div><!-- End .shop-container -->
</div><!-- End .shop-row -->

{{ $products->links() }}
<nav aria-label="Page Navigation">
    <ul class="pagination">
        <li><a href="#">1</a></li>
        <li class="active"><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li class="dots"><span>...</span></li>
        <li><a href="#">18</a></li>
    </ul>
</nav>
@endsection