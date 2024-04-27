<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function get_all()
    {   
        $posts = Post::all();
        return view('postempleo', ['posts'=>$posts]);
    }

    public function get_form()
    {   
        return view('add_post');
    }

    public function post(Request $request)
    {   
        Post::create([
            'title'=>$request->title,
            'des'=>$request->des,
            'pais'=>$request->pais,
            'ciudad'=>$request->ciudad,
            'requisitos'=>$request->requisitos,
            'formato'=>$request->formato,
            'modalidad'=>$request->modalidad,
            'salario'=>$request->salario,
            'cierre'=>$request->cierre,
            'user_id'=>intval($request->user_id),
        ]);

        return redirect()->route('red');
    }
}
