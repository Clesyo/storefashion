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
        $resale = new ResaleProduct();
        $detail = new ProductDetail();
        $company = Company::findOrFail($req->product['company_id']);
        $notification = null;
        $data_product = $req->product;
        $data_resale = $req->resale;
        $data_detail = $req->detail;
        dd($data_resale);


        $images = $req->allFiles('image');

        $product = $product::create($data_product);

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
            $resale = $resale::create($data_resale);

            if($resale){
                $data_detail['resale_product_id'] = $resale->id;
                $detail = $detail::create($data_detail);
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
