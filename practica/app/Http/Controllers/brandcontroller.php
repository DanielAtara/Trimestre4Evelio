<?php

namespace App\Http\Controllers;

use App\Models\countries;
use App\Models\manufacturer_brand;
use Illuminate\Http\Request;

class brandcontroller extends Controller
{
    public function crear_marca(){
        $paises=countries::all();
        return view('/brands/brand', [
            'paises' => $paises
        ]);
    }
    public function registro(Request $datos){
        $registro=new manufacturer_brand();

        $registro->code=$datos->code;
        $registro->name=$datos->name;
        $registro->origin_country=$datos->origin_country;

        $registro->save();

        return redirect()->route('country.crear_marca');
        
    }
    
}
