<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class categoriecontroller extends Controller
{
    public function create_categorie(){
        return view('/categories/createcategories');
    }

    public function register_categorie(Request $datos){
        $new1=new categories();
        $new1->name= $datos->name;
        $new1->save();
        
        return redirect()->route('create_categorie');
    }
}
