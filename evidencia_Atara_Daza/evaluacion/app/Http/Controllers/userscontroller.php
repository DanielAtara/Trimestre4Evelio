<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\roles;
use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;

class userscontroller extends Controller
{
    public function index(){
        $usuarios=users::all();
        return view('/users/indexUsers',[
            'users' => $usuarios
        ]);
    }
    public function create(){
        $intento=role::all();
        return view('/users/users',[
            'roles' => $intento
        ]);

    }

    public function store(Request $datos){
        $new1=new users();
        $new1->doc_type=$datos->doc_type;
        $new1->doc_num=$datos->doc_num;
        $new1->name=$datos->name;
        $new1->last_name=$datos->last_name;
        $new1->phone=$datos->phone;
        $new1->user_name=$datos->user_name;
        $new1->email=$datos->email;
        $new1->password=$datos->password;
        $new1->role_id=$datos->role_id;

        $new1->save();

        return redirect()->route('create_users');

    }

    public function edit(users $users){
        $roles=role::all();
        return view('/users/updateUsers',[
            'users' => $users,
            'roles'=>$roles
        ]);
    }

    public function update(Request $request,$users)
    {
       $new1=users::findOrFail($users);
       $new1->doc_type=$request->doc_type;
       $new1->doc_num=$request->doc_num;
       $new1->name=$request->name;
       $new1->last_name=$request->last_name;
       $new1->phone=$request->phone;
       $new1->user_name=$request->user_name;
       $new1->email=$request->email;
       $new1->password=$request->password;
       $new1->role_id=$request->role_id;

       $new1->save();
       
       return redirect()->route('index_usuarios');
    }

}
