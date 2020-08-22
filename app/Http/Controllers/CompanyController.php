<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use function GuzzleHttp\Promise\all;

class CompanyController extends Controller
{
    //
    public function index()
    {
        $company = Company::where('user_id', auth()->user()->id)->first();
        $title = 'Store Fashion | Painel - ';
        $pages = ['Perfil'];
        return view('company.company_index',compact('title','pages','company'));
    }

    public function store(Request $req)
    {
        $company = new Company();
        $image = null;
        $notication = null;

        $datas = $req->all();
        unset($datas['image']);


        if ($req->hasFile('image') && $req->file('image')->isValid()) {
            # code...
            $image = $req->file('image')->store('EMPRESA/'.$datas['name'].'/PERFIL');

            if ($image != null) {
                $datas['image'] = $image;
            }else{

                $notication = [
                    'message' => 'Erro ao fazer upload de imagem, tente novamente.',
                    'title' => 'Erro:',
                    'alert_type' => 2,
                ];
            }
        }

        $company = $company::create($datas);
        if ($datas) {

            $notication = [
                'message' => 'Empresa cadastrada com sucesso.',
                'title' => 'Sucesso:',
                'alert_type' => 1,
            ];
        }


        return redirect()->back()->with($notication);
    }
}
