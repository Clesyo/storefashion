@extends('layouts.site')

@section('title')
    {{ $title.$page }}
@endsection

@section('content')
<div class="page-header text-center">
    <h1>Carrinho de Compra</h1>
    <p>Seus itens de carrinho</p>
</div><!-- End .page-header -->

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Nome do produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="product-col">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html">
                                <img src="{{asset('site/images/products/cart/product1.jpg')}}" alt="Product">
                            </a>
                        </figure>
                        <h3 class="product-title">
                            <a href="product.html">Tripod lampshade</a>
                        </h3>
                    </div><!-- End .product -->
                </td>
                <td class="price-col">$180.00</td>
                <td class="quantity-col">
                    <input class="cart-product-quantity form-control" type="text">
                </td>
                <td class="total-col">$180.00</td>
                <td class="delete-col"><a href="#" class="btn-delete" title="Delete product" role="button"></a></td>
            </tr>
            <tr>
                <td class="product-col">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html">
                                <img src="{{asset('site/images/products/cart/product2.jpg')}}" alt="Product">
                            </a>
                        </figure>
                        <h3 class="product-title">
                            <a href="product.html">Woolen scarf</a>
                        </h3>
                    </div><!-- End .product -->
                </td>
                <td class="price-col">$95.00</td>
                <td class="quantity-col">
                    <input class="cart-product-quantity form-control" type="text">
                </td>
                <td class="total-col">$95.00</td>
                <td class="delete-col"><a href="#" class="btn-delete" title="Delete product" role="button"></a></td>
            </tr>
        </tbody>
    </table>
</div><!-- End .table-responsive -->

<div class="row">
    <div class="col-sm-7">
        <div class="cart-discount">
            <h3>Cupom de desconto</h3>
            <p>Insira seu código de cupom, se tiver um.</p>

            <form action="#">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Insira o seu código de cupom">
                    <span class="input-group-btn">
                        <button type="submit" class="btn">Aplicar código</button>
                    </span>
                </div>
            </form>
        </div><!-- End .cart-discount -->
    </div><!-- End .col-sm-7 -->

    <div class="col-sm-4 col-sm-offset-1">
        <div class="cart-proceed">
            <p class="cart-subtotal"><span>SUB TOTAL :</span> $405.00</p>
            <p class="cart-total"><span>TOTAL Geral:</span> <span class="text-accent">$405.00</span></p>
            <a href="checkout.html" class="btn btn-accent">Finalizar pedido</a>
        </div><!-- Endd .cart-proceed -->
    </div><!-- End .col-sm-4 -->
</div><!-- End .row -->

@endsection