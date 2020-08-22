<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BrandController extends Controller
{
    //
    public function index()
    {
        $company = Company::where('user_id', auth()->user()->id)->first();
        $title = 'Store Fashion | Painel - ';
        $pages = ['Marcas'];
        $brands = Brand::where('company_id', $company->id)->get();
        return view('brand.brand_index',compact('title','pages','company','brands'));
    }

    public function store(Request $req)
    {
        $brand = new Brand();
        $logo = null;
        $company = Company::find($req->input('company_id'));
        $notication = null;

        $datas = $req->all();
        unset($datas['logo']);

        if ($req->hasFile('logo') && $req->file('logo')->isValid()) {
            $logo = $req->file('logo')->store('EMPRESA/'.$company->name.'/BRAND');

            if ($logo != null) {
                $datas['logo'] = $logo;
            }else{

                $notication = [
                    'message' => 'Erro ao fazer upload de imagem, tente novamente.',
                    'title' => 'Erro:',
                    'alert_type' => 2,
                ];
            }
        }else{

            $notication = [
                'message' => 'Falha no upload, tente novamente.',
                'title' => 'Aviso:',
                'alert_type' => 3,
            ];
            return redirect()->back()->with($notication);
        }

        $brand = $brand::create($datas);

        if($brand){
            $notication = [
                'message' => 'Marca incluida com sucesso.',
                'title' => 'Sucesso:',
                'alert_type' => 1,
            ];
        }

        return redirect()->back()->with($notication);
    }
}
