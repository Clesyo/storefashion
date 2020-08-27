<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Company;
use App\Models\ImageProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    //
    public function index()
    {
        $title = 'Store Fashion | Painel - ';
        $pages = ['Produtos'];
        return view('product.product_index',
        compact('pages','title','categories01'));
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
        $notification = null;
        $product = new Product();
        $company = Company::findOrFail($req->input('company_id'));
        $datas = $req->all();
        unset($datas['image']);
        dd($datas);

        $images = $req->allFiles('image');

        $product = $product::create($datas);

        if($product){

            for ($i=0; $i < count($images['image']); $i++) {
                $file = $images['image'][$i];

                $image = new ImageProduct();
                $image->path = $file->store('EMPRESA/'.$company->name.'/PRODUCTS');
                $image->product_id = $product->id;
                $image->save();
                unset($image);
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

        return redirect()->back()->with($notification);
    }
}
