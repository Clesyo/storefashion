<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function productView()
    {
        $title = 'Store Fashion - ';
        $page = 'Produto';
        return view('site.product.product_view', compact('title','page'));
    }
    
    public function productAll()
    {
        $title = 'Store Fashion - ';
        $page = 'Produtos';
        $products = Product::paginate(10);
        return view('site.product.product_all', compact('title','page','products'));
        
    }
}
