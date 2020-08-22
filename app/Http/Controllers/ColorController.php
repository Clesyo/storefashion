<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ColorController extends Controller
{
    //
    public function index()
    {
        $pages = ['Cores'];
        $title = 'Store Fashion | Painel - ';
        $colors = Color::all();
        return view('color.color_index', compact('pages','title','colors'));
    }

    public function store(Request $req)
    {
        $notification = null;
        $color = new Color();
        $color = $color::create($req->all());

        if($color){
            $notification = [
                'message' => 'Nova cor incluida.',
                'title' => 'Mensagem:',
                'alert_type' => 1,
            ];
        }
        return redirect()->back()->with($notification);
    }
}
