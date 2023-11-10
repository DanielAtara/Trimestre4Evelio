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
        
        return view('/users/users');
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
}
