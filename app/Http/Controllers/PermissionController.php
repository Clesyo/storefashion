<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    //
    public function index()
    {
        $title = 'Store Fashion | Painel - ';
        $pages = ['Permissões'];
        $permissions = Permission::paginate(10);
        return view('settings.permission.permission_index', compact('title','pages','permissions'));
    }

    public function store(Request $req)
    {
        $notification = null;
        $permission = new Permission();

        $permission = $permission::create($req->all());

        if($permission){

            $notification = [
                'message' => 'Nova permissão incluida com sucesso.',
                'title' => 'Sucesso:',
                'alert_type' => 1,
            ];
        }
        return redirect()->back()->with($notification);
    }
}
