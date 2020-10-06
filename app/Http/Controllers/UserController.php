<?php

namespace App\Http\Controllers;

use App\Mail\ActiveUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function activeUser($token)
    {
        $user = User::where('token',$token)->first();
        //dd($user->confirmed);


        if ($user->confirmed == 0) {
            $user->confirmed = 1;
            $user->save();
            $success = true;
            $message = "";
        }else{
            $success = false;
            $message = "Confirmação de usuário já realizada!";
        }

        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }

    public function resendMail($id)
    {
        $user = User::find($id);

        if($user->confirmed == 1){
            $success = 1;
            $message = "Usuário já confirmado!";
        }else{
            Mail::send(new ActiveUser($user));
            $success = 2;
            $message = 'Email reenviado com sucesso.';
        }

        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);

    }
}
