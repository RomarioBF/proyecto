<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class UsuarioController extends Controller


{
    public function index(Request $request)
    {
        
        $texto=trim($request->get('texto'));
        $user = User::where('name','LIKE', '%'.$texto. '%')
        ->orWhere('id','LIKE','%'.$texto. '%')->get()
        ->sortBy('id');
        return view ('usuario.index',['user'=>$user, 'texto'=>$texto]);

    }


    public function create()
    {
        $user= new User;
        $route = route('usuario.store');
        return view('usuario.modal',['user'=>$user, 'route'=>$route]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | email | unique:users',
            'cedula' => 'required | numeric | unique:users',
        ]);
      $user = new User;
        $user->cedula=$request->input('cedula');
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=$request->input('password')??'11111';
        $user->save();
        return view ('usuario.index');

    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $route = route('usuario.update',$user->id);
        return view('usuario.modal',['user'=>$user, 'route'=>$route]);
    }

    public function update(Request $request, $id)
    {
        $user=User::findOrFail($id);
        $user->cedula=$request->input('cedula');
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=$request->input('password')??'11111';
        $user->save();

        return redirect()->route('usuario.index');

    }


    public function destroy(User $user)
    {
        
        $user->delete();
         return redirect()->route('usuario.index');
    }
}