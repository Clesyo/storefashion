@extends('layouts.site')

@section('title')
    {{ $title.$page }}
@endsection

@section('content')
    <div class="row">
        <div class="product-gallery-container">
            <div class="product-zoom-wrapper">
                <div class="product-zoom-container">
                <img class="xzoom" id="product-zoom" src="{{asset('site/images/products/single/product1.jpg')}}" data-xoriginal="{{asset('site/images/products/single/big/product1.jpg')}}" alt="Zoom image"/>
                </div><!-- End .product-zoom-container -->
            </div><!-- End .product-zoom-wrapper -->

            <div class="product-gallery-wrapper">
                <div class="owl-data-carousel owl-carousel product-gallery"
                    data-owl-settings='{ "items":4, "margin":14, "nav": true, "dots":false }'
                    data-owl-responsive='{"240": {"items": 2}, "360": {"items": 3}, "768": {"items": 4}, "992": {"items": 3}, "1200": {"items": 4} }'>

                    <a href="#" data-image="{{asset('site/images/products/single/product1.jpg')}}" data-zoom-image="{{asset('site/images/products/single/big/product1.jpg')}}" class="product-gallery-item">
                        <img src="{{asset('site/images/products/single/thumbs/product1.jpg')}}" alt="product-small-1">
                    </a>
                    <a href="#" data-image="{{asset('site/images/products/single/product2.jpg')}}" data-zoom-image="{{asset('site/images/products/single/big/product2.jpg')}}" class="product-gallery-item">
                        <img src="{{asset('site/images/products/single/thumbs/product2.jpg')}}" alt="product-small-2">
                    </a>
                    <a href="#" data-image="{{asset('site/images/products/single/product3.jpg')}}" data-zoom-image="{{asset('site/images/products/single/big/product3.jpg')}}" class="product-gallery-item">
                        <img src="{{asset('site/images/products/single/thumbs/product3.jpg')}}" alt="product-small-3">
                    </a>
                    <a href="#" data-image="{{asset('site/images/products/single/product4.jpg')}}" data-zoom-image="{{asset('site/images/products/single/big/product4.jpg')}}" class="product-gallery-item">
                        <img src="{{asset('site/images/products/single/thumbs/product4.jpg')}}" alt="product-small-4">
                    </a>
                    <a href="#" data-image="{{asset('site/images/products/single/product5.jpg')}}" data-zoom-image="{{asset('site/images/products/single/big/product5.jpg')}}" class="product-gallery-item">
                        <img src="{{asset('site/images/products/single/thumbs/product5.jpg')}}" alt="product-small-5">
                    </a>
                    <a href="#" data-image="{{asset('site/images/products/single/product6.jpg')}}" data-zoom-image="{{asset('site/images/products/single/big/product6.jpg')}}" class="product-gallery-item">
                        <img src="{{asset('site/images/products/single/thumbs/product6.jpg')}}" alt="product-small-6">
                    </a>
                </div><!-- End .product-gallery -->
            </div><!-- End .product-gallery-wrapper -->
        </div><!-- End .product-gallery-container -->
        <div class="product-details">
            <h2 class="product-title">Comfort Couch Classic Single Seater Sofa</h2>
            
            <div class="product-meta-row">
                <div class="product-price-container">
                    <span class="product-price">$250.00</span>
                </div><!-- Endd .product-price-container -->

                <div class="product-ratings-wrapper">
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                        </div><!-- End .product-ratings -->
                    </div><!-- End .ratings-container -->
                    <a class="ratings-link" href="#reviews" title="Reviews">30 Avalia????es</a>
                </div><!-- End .product-ratings-wrapper -->
            </div><!-- End .product-meta-row -->
            <div class="product-content">
                <p>Comfort Couch Classic sigle Seater Soft is Relax in supreme comfort and add style to your living room with this fabulously designed single.</p>
            </div><!-- End .product-content -->

            <ul class="product-meta-list">
                <li><label>Disponibilidade:</label> <span class="product-stock">In Stock</span></li>
            </ul>
            
            <label>Cores:</label>
            <ul class="filter-color-list">
                <li class="active">
                    <span class="filter-color" style="background-color: #575057;"></span>
                </li>
                <li>
                    <span class="filter-color" style="background-color: #d3b396;"></span>
                </li>
                <li>
                    <span class="filter-color" style="background-color: #080808;"></span>
                </li>
                <li>
                    <span class="filter-color" style="background-color: #e6e4e6;"></span>
                </li>
            </ul>

            <label>Tamanho:</label>
            <ul class="filter-size-list">
                <li class="active">
                    <span class="filter-size">S</span>
                </li>
                <li>
                    <span class="filter-size">M</span>
                </li>
                <li>
                    <span class="filter-size">L</span>
                </li>
                <li>
                    <span class="filter-size">XL</span>
                </li>
            </ul>
            <div class="product-action">
                <div class="product-quantity">
                    <label>QTD:</label>
                    <input class="single-product-quantity form-control" type="text">
                </div><!-- end .product-quantity -->
                
                <a href="#" class="btn btn-accent btn-addtobag">Adicionar ao carrinho</a>
            </div><!-- End .product-action -->
        </div><!-- End .product-details -->
    </div><!-- End .row -->

    <div class="product-details-tab">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Descri????o</a></li>
            <li role="presentation"><a href="#information" aria-controls="information" role="tab" data-toggle="tab">Informa????o</a></li>
            <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Avalia????o</a></li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
            </div><!-- End .tab-pane -->
            <div role="tabpanel" class="tab-pane" id="information">
                <div class="table-responsive">
                    <table class="table product-info-table">
                        <tbody>
                            <tr>
                                <td>Weight:</td>
                                <td>50 KG</td>
                            </tr>
                            <tr>
                                <td>Dimensions:</td>
                                <td>120 x 120 x 120 cm</td>
                            </tr>
                            <tr>
                                <td>Material:</td>
                                <td>Wood, Leather</td>
                            </tr>
                            <tr>
                                <td>Colors:</td>
                                <td>Beige, Black</td>
                            </tr>
                            <tr>
                                <td>Size:</td>
                                <td>SM, MD, LG</td>
                            </tr>
                            <tr>
                                <td>Other Info:</td>
                                <td>Comfort Couch Classic sigle Seater Soft is Relax in supreme comfort.</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- End .table-responsive -->
            </div><!-- End .tab-pane -->
            <div role="tabpanel" class="tab-pane" id="reviews">
                <div class="product-reviews comments">
                    <ul class="comments-list media-list">
                        <li class="media">
                            <div class="comment">
                                <div class="media-left">
                                    <img class="media-object" src="{{asset('site/images/blog/user.png')}}" alt="User">
                                </div><!-- End .media-left -->
                                <div class="media-body">
                                    <h4 class="media-heading">Mathew joseph</h4>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .ratings-container -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis laoreet cursus. Cras nec condimentum dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis laoreet cursus. Cras nec condimentum dolor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis laoreet cursus. Cras nec condimentum dolor.</p>
                                </div><!-- End .media-body -->
                            </div><!-- End .comment -->
                        </li>
                    </ul>
                </div><!-- End .comments -->
                <div class="review-form-container">
                    <h3>Deixe uma avalia????o</h3>
                    <form action="#" method="post">
                        <label>Sua avalia????o*</label>
                        <div class="form-group clearfix">
                            <fieldset class="rate-field">
                                <input type="radio" id="star5" name="rating" value="5">
                                <label for="star5" title="5 stars"></label>

                                <input type="radio" id="star4" name="rating" value="4" checked>
                                <label for="star4" title="4 stars"></label>

                                <input type="radio" id="star3" name="rating" value="3">
                                <label for="star3" title="3 stars"></label>

                                <input type="radio" id="star2" name="rating" value="2">
                                <label for="star2" title="2 stars"></label>

                                <input type="radio" id="star1" name="rating" value="1">
                                <label for="star1" title="1 star"></label>
                            </fieldset>
                        </div><!-- End .form-group -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nome*</label>
                                    <input type="text" class="form-control" required>
                                </div><!-- End .form-group -->
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control" required>
                                </div><!-- End .form-group -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->

                        <div class="form-group mb20">
                            <label>Sua revis??o*</label>
                            <textarea cols="30" rows="5" class="form-control"></textarea>
                        </div>

                        <div class="text-right">
                            <button class="btn btn-accent min-width" type="submit">Enviar</button>
                        </div><!-- End .text-right -->
                    </form>
                </div><!-- End #respond -->
            </div><!-- End .tab-pane -->
        </div>
    </div><!-- End .product-details-tab -->
@endsection