<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $title = 'Store Fashion | Painel - ';
        $pages = ['Usuários'];
        $users = User::all();
        return view('settings.user.user_index', compact('title','pages','users'));
    }

    public function includeRole(Request $req)
    {

        // dd($req->all());
        $user = User::find($req->user_id);

        $user->roles()->attach($req->role_id);
        $notification = [
            'message' => 'Função incluida com sucesso.',
            'title' => 'Mensagem:',
            'alert_type' => 1,
        ];

        return redirect('settings/user')->with($notification);
    }

    public function activeUser(Request $req)
    {
        $user = User::find($req->token);

        if ($user->confirmed == 0) {
            $user->confirmed = 1;
            return redirect('active-user-confirmed');
        }

        return redirect('');
    }
}
