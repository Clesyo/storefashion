<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Company;
use App\Models\ImageProduct;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\ResaleProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $title = 'Store Fashion | Painel - ';
        $pages = ['Produtos'];
        $company = Company::where('user_id',auth()->user()->id)->first();
        $products = Product::where('company_id',$company->id)->get();
        return view('product.product_index', compact('pages','title','products'));
    }

    public function create()
    {
        $title = 'Store Fashion | Painel - ';
        $pages = ['produtos'=>'Produtos','Novo Produto'];
        $company = Company::where('user_id',auth()->user()->id)->first();
        $categories = Category::where('company_id',$company->id)->get();
        $brands = Brand::where('company_id',$company->id)->get();
        return view('product.product_create',compact('pages','title','company','categories','brands'));
    }

    public function store(Request $req)
    {
        $product = new Product();
        $company = Company::findOrFail($req->product['company_id']);
        $notification = null;
        $data_product = $req->product;
        $data_product['price'] = str_replace(',','.',$data_product['price']);
        if (isset($data_product['price_promotion'])) {
            $data_product['price_promotion'] = str_replace(',','.',$data_product['price_promotion']);
        }
        $data_resale = $req->resale;
        //dd(count($data_resale));




        $product = $product::create($data_product);

        if($product){

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
                    $image->path = $file->store('EMPRESA/'.$company->name.'/PRODUCTS');
                    $image->resale_products_id = $resale_id;
                    $image->save();
                    unset($image);
                }
                //$resale->save();
                unset($resale_id);
            }
            $notification = [
                'message' => 'Produto incluido com sucesso.',
                'title' => 'Mensagem:',
                'alert_type' => 1,
            ];
        }else{
            $notification = [
                'message' => 'Erro ao incluir produto, tente novamente.',
                'title' => 'Aviso:',
                'alert_type' => 3,
            ];
        }

        return redirect('produtos')->with($notification);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $title = 'Store Fashion | Painel - ';
        $pages = ['produtos'=>'Produtos','Novo Produto'];
        $company = Company::where('user_id',auth()->user()->id)->first();
        $categories = Category::where('company_id',$company->id)->get();
        $brands = Brand::where('company_id',$company->id)->get();
        return view('product.product_edit',compact('pages','title','categories','brands','company','product'));
    }

    public function update(Request $req, $id)
    {
        $product = Product::findOrFail($id);
        $resale = ResaleProduct::findOrFail($product->resale->id);
        $detail = ProductDetail::findOrFail($resale->detail->id);
        $company = Company::findOrFail($req->product['company_id']);
        $notification = null;
        $data_product = $req->product;
        $data_resale = $req->resale;
        $data_detail = $req->detail;
        dd($data_resale);


        $images = $req->allFiles('image');

        $product = $product->update($data_product);

        if($product){

            for ($i=0; $i < count($images['image']); $i++) {
                $file = $images['image'][$i];

                $image = new ImageProduct();
                $image->path = $file->store('EMPRESA/'.$company->name.'/PRODUCTS');
                $image->product_id = $product->id;
                $image->save();
                unset($image);
            }

            $resale['product_id'] = $product->id;
            $resale = $resale->update($data_resale);

            if($resale){
                $data_detail['resale_product_id'] = $resale->id;
                $detail = $detail->update($data_detail);
            }

            $notification = [
                'message' => 'Produto alterado com sucesso.',
                'title' => 'Mensagem:',
                'alert_type' => 1,
            ];
        }else{
            $notification = [
                'message' => 'Erro ao alterar produto, tente novamente.',
                'title' => 'Aviso:',
                'alert_type' => 3,
            ];
        }

        return redirect('produtos')->with($notification);
    }
    public function alterStatusShowcase(Request $req)
    {
        $product = Product::findOrFail($req->product_id);

        if($product->showcase == 1){
            $product->showcase = 0;
        }else{
            $product->showcase = 1;

        }
        $product->save();

        return redirect()->back();
    }

    public function alterStatusProduct(Request $req)
    {
        $product = Product::findOrFail($req->product_id);

        if($product->status == 1){
            $product->status = 0;
        }else{
            $product->status = 1;

        }
        $product->save();

        return redirect()->back();
    }
}
