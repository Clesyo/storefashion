<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $pages = ['Produtos'];
        return view('product.product_index',compact('pages'));
    }

    public function create()
    {
        $pages = ['Produtos','Novo Produto'];
        return view('product.product_create',compact('pages'));
    }
}
