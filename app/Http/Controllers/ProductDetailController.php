<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    //
    public function store(Request $req)
    {
        $detail = new ProductDetail();
        $notification = null;
        $detail = $detail::create($req->all());


        if($detail){

            $notification = [
                'message' => 'Detalhes do produto incluido com sucesso.',
                'title' => 'Mensagem:',
                'alert_type' => 1,
            ];
        }
        return redirect()->back()->with($notification);
    }
}
