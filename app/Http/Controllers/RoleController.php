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
}
