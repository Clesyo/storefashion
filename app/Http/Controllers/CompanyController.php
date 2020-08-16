<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use function GuzzleHttp\Promise\all;

class CompanyController extends Controller
{
    //
    public function index()
    {
        $title = 'Store Fashion | Painel - ';
        $pages = ['Perfil'];
        return view('company.company_index',compact('title','pages'));
    }

    public function store(Request $req)
    {
        $company = new Company();
        $image = null;

        $datas = $req->all();
        unset($datas['image']);


        if ($req->hasFile('image') && $req->file('image')->isValid()) {
            # code...
            $image = $req->file('image')->store('EMPRESA/'.$req->input('name'));
        }

        if ($image != null) {
            $company = $company::create($datas);
            if ($datas) {

                $notication = [
                    'title' => 'Sucesso:',
                    'message' => 'Empresa cadastrada com sucesso.',
                    'alert_type' => 1,
                ];
            }
        }else{

            $notication = [
                'title' => 'Erro:',
                'message' => 'Erro ao fazer upload de imagem, tente novamente.',
                'alert_type' => 2,
            ];
        }

        return redirect()->back()->with($notication);
    }
}
