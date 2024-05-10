<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Crud extends Controller
{
    public function index()
    {
        $users = User::all();
        $max = User::count();
        $currentUser = auth()->user(); // Obtener el usuario actualmente autenticado
        return view('home', ['users'=>$users, 'max'=>$max, 'currentUser' => $currentUser]);
    }

    public function search(Request $request)
    {   
        $id = $request->input('id');
        $user = User::find($id);

        return view('buscador', ['user'=>$user]);
    }
    
    public function view_form()
    {
        return view('registrar');
        
    }

    public function registrar(Request $request)
    {   
        $request->validate([
            'name'=>['required'],
            'email'=>['required','email'],
            'password'=>['required','min:3'],
            'role_id'=>['required'],
            'uri'=>['image']
        ]);

        $file = $request->file('uri');
        $filaName = time().'.'.$file->extension();
        $file->storeAs('public/images', $filaName);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = intval($request->role_id);
        $user->password = Hash::make($request->password);
        $user->uri = $filaName;
        $user->color = $request->color;
        $user->save();

        return redirect()->route('index')->with('exito','Carga exitosa!');
    }

    public function actualizar_v($id)
    {
        $user = User::find($id);

        return view('actualizar', ['user'=>$user]);
    }
    
    public function actualizar(Request $request,$id)
    {   
        
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = intval($request->role_id);
        $user->color = $request->color;
        $user->save();

        return redirect()->route('index');
    }

    public function actualizar_view_perfil($id)
    {
        $user = User::find($id);

        return view('actualizar_perfil', ['user'=>$user]);
    }
    public function actu_perfil(Request $request, $id)
    {   
        $user = User::find($id);
    
        // Obtener el nombre de archivo actual del usuario
        $currentFileName = $user->uri;
    
        // Verificar si se proporcionó un nuevo archivo
        if ($request->hasFile('uri')) {
            $file = $request->file('uri');
            $filaName = time().'.'.$file->extension();
            $file->storeAs('public/images', $filaName);
        } else {
            // Si no se proporciona un nuevo archivo, conservar el nombre de archivo actual
            $filaName = $currentFileName;
        }
    
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = intval($request->role_id);
        // Asignar el nombre de archivo (nuevo o actual) al usuario
        $user->uri = $filaName;
        $user->color = $request->color;
        $user->save();
    
        return redirect()->route('index');
    }
    


    public function eliminar($id)
    {
        User::destroy($id);
        
        return redirect()->route('index');
    }

}