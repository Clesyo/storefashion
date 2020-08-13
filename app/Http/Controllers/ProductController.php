<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $title = 'Store Fashion | Painel - ';
        $pages = ['Produtos'];
        return view('product.product_index',compact('pages','title'));
    }

    public function create()
    {
        $title = 'Store Fashion | Painel - ';
        $pages = ['produtos'=>'Produtos','Novo Produto'];
        return view('product.product_create',compact('pages','title'));
    }
}
