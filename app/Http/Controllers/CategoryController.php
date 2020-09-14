<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $title = 'Store Fashion | Painel - ';
        $company = Company::where('user_id',auth()->user()->id)->first();
        $pages = ['Categorias'];
        $categories = Category::where('company_id',$company->id)->get();
        return view('category.category_index',compact('pages','title','company','categories'));
    }

    public function store(Request $req)
    {
        $notication = null;
        $category = new Category();
        //dd($req->all());
        $category = $category::create($req->all());

        if($category){
            $notication = [
                'message' => 'Categoria incluida com sucesso.',
                'title' => 'Mensagem:',
                'alert_type' => 1,
            ];
        }else{
            $notication = [
                'message' => 'Não foi possivel incluir nova categoria, tente novamente.',
                'title' => 'Aviso:',
                'alert_type' => 3,
            ];
        }

        return redirect()->back()->with($notication);
    }
}
