<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    //
    public function cart()
    {
        $title = 'Store Fashion - ';
        $page = 'Carrinho de compra';
        return view('site.cart.shopping_cart', compact('title','page'));
    }
}
