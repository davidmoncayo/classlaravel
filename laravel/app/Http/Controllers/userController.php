<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;

class userController extends Controller
{
     public function index()
    {
    
      return view('User.users');
    }
    public function create()
    {
       
       
    }
    
    public function view()
    {
       
    }
    
    public function store(Request $request)
    {
   
    }
    public function edit($id)
    {
    $datos = User::find($id);
    return view('User.edit', compact('User', 'id'));
    }
    public function update(Request $request, $id)
    {
        $datos = User::find($id);
        $datos->name = $request->get('name');
        $datos->lastname = $request->get('lastname');
        $datos->phone = $request->get('phone');
        $datos->address = $request->get('address');
        $datos->age = $request->get('age');
         $datos->gender = $request->get('gender');
         $datos->email = $request->get('email');
         $datos->address = $request->get('address');
        $datos->rol_user = $request->get('rol_user');
        $datos->estado_user = $request->get('estado_user');
        $datos->save();
        return redirect('users');
    }
    
    public function destroy($id)
    {

    }
    
}
