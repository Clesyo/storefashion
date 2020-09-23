<?php

namespace App\Http\Controllers;

use App\Models\ImageProduct;
use App\Models\Product;
use App\Models\ResaleProduct;
use Illuminate\Http\Request;

class ResaleProductController extends Controller
{
    //
    public function store(Request $req)
    {
        $notification = null;
        $product = Product::find($req->input('product_id'));
        

        $data_resale = $req->resale;

        if ($product) {
            
            for ($i=0; $i < count($data_resale); $i++) {
                $resale = new ResaleProduct();
                
                $resale = $resale::create([
                    'quantity_available' => $data_resale[$i]['quantity_available'],
                    'quantity_accounting' => $data_resale[$i]['quantity_available'],
                    'quantity_allocated' => 0,
                    'size' => strtoupper($data_resale[$i]['size']),
                    'material' => $data_resale[$i]['material'],
                    'color_id' => (isset($data_resale[$i]['color_id'])) ? $resale->color_id = $data_resale[$i]['color_id'] : null,
                    'product_id' => $product->id,
                    ]);
                    $resale_id = $resale->id;
                    
                    /* $resale->quantity_available = $data_resale[$i]['quantity_available'];
                    $resale->quantity_accounting = $data_resale[$i]['quantity_available'];
                    $resale->quantity_allocated = 0;
                    $resale->size = strtoupper($data_resale[$i]['size']);
                    $resale->material = $data_resale[$i]['material'];
                    if(isset($data_resale[$i]['color_id'])){
                        $resale->color_id = $data_resale[$i]['color_id'];
                    }
                    $resale->product_id = $product->id; */
                    
                    $images = $data_resale[$i]['image'];
                    
                    for ($x=0 ; $x < count($images); $x++) {
                        $file = $images[$x];
                        
                        $image = new ImageProduct();
                        $image->path = $file->store('EMPRESA/'.$product->company->name.'/PRODUCTS');
                        $image->resale_products_id = $resale_id;
                        $image->save();
                        unset($image);
                    }
                    //$resale->save();
                    unset($resale_id);
            }
        }

        $notification = [
            'message' => 'Estoque incluido com sucesso.',
            'title' => 'Mensagem:',
            'alert_type' => 1,
        ];

        return redirect()->back()->with($notification);
    }
}
