<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function index()
    {
        $title = 'Store Fashion | Painel - ';
        $pages = ['Funções'];
        $roles = Role::all();
        return view('settings.role.role_index',compact('title','pages','roles'));
    }

    public function create()
    {
        $title = 'Store Fashion | Painel - ';
        $pages = ['settings/role'=>'Funções','Nova função'];
        $permissions = Permission::all();
        return view('settings.role.role_create',compact('title','pages','permissions'));
    }

    public function edit($id)
    {
        $role = Role::find($id);
        $title = 'Store Fashion | Painel - ';
        $pages = ['settings/role'=>'Funções','Editar função'];
        $permissions = Permission::all();
        return view('settings.role.role_edit',compact('title','pages','permissions','role'));
    }

    public function active(Request $req)
    {
        $role = Role::find($req->input('id'));

        if($req->input('status') == 1){
            $role->status = 0;
        }else{
            $role->status = 1;
        }

        $role->save();

        return redirect()->back();
    }

    public function store(Request $req)
    {
        // dd($req->permissions);

        $role = new Role();

        $role = $role::create([
            'name' => $req->name,
        ]);

        $role->permissions()->attach($req->permissions);
        
        $notification = [
            'message' => 'Função incluida com sucesso.',
            'title' => 'Mensagem:',
            'alert_type' => 1,
        ];

        return redirect('settings/role')->with($notification);
    }

    public function update(Request $req, $id)
    {
        $role = Role::find($id);

        $role->name = $req->name;
        $role->save();

        $role->permissions()->sync($req->permissions);

        $notification = [
            'message' => 'Função alterada com sucesso.',
            'title' => 'Mensagem:',
            'alert_type' => 1,
        ];

        return redirect('settings/role')->with($notification);
    }
}
