<?php

namespace App\Http\Controllers;

use App\Models\ResaleProduct;
use Illuminate\Http\Request;

class ResaleProductController extends Controller
{
    //
    public function store(Request $req)
    {
        $notification = null;
        $resale = new ResaleProduct();
        //dd($req->all());

        $resale = $resale::create($req->all());

        if($resale){

            $notification = [
                'message' => 'Estoque incluido com sucesso.',
                'title' => 'Mensagem:',
                'alert_type' => 1,
            ];
        }
        return redirect()->back()->with($notification);
    }
}
