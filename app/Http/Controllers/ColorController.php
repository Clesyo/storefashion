<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorController extends Controller
{
    //
    public function index()
    {
        $pages = ['Cores'];
        $title = 'Store Fashion | Painel - ';
        return view('color.color_index', compact('pages','title'));
    }
}
