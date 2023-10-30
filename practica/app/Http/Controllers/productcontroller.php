<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\manufacturer_brands;
use App\Models\product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function crear_producto(){
        $categories=categories::all();
        $brands=manufacturer_brands::all();
        return view('products/createproducts',[
            'categories' => $categories,
            'brands' => $brands
        ]);
    }
    public function register_products(Request $inputs){
        $new1=new product();
        $new1->code=$inputs->code;
        $new1->categorie_id=$inputs->categorie_id;
        $new1->brand_id=$inputs->brand_id;
        $new1->description=$inputs->description;
        $new1->unit_measurement=$inputs->unit_measurement;
        $new1->available=$inputs->avaliable;
        $new1->percentage_vat=$inputs->percentage_vat;
        $new1->unit_price=$inputs->unit_price;
        $new1->stock=$inputs->stock;

        $new1->save();

        return redirect()->route('create_product');


    }
}
