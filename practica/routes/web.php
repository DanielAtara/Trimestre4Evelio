<?php

use App\Http\Controllers\brandcontroller;
use App\Http\Controllers\categoriecontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\productcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Ruta para acceder con el métdodo get a una vista

Route::get('/', function () { 
    return view('country.store');
});

//Rutas de controlador para gestionar paises:
//En su orden: get, post
//Revise la lógica y el nombre (name) de la ruta al final:

Route::get('/country', [CountryController::class, 'index'])->name('country.index');
Route::post('/country', [CountryController::class, 'store'])->name('country.store');
Route::get('brand/create',[brandcontroller::class,'crear_marca'])->name('country.crear_marca');
Route::post('brand/save',[brandcontroller::class,'registro'])->name('country.save');
Route::get('product/creatproduct',[productcontroller::class,'crear_producto'])->name('creatproduct.crear_producto');
Route::get('category/createcategorie',[categoriecontroller::class,'create_categorie'])->name('create_categorie');
Route::post('category/save',[categoriecontroller::class,'register_categorie'])->name('register_categorie');
Route::get('product/creatproduct',[productcontroller::class,'crear_producto'])->name('create_product');
Route::post('product/save',[productcontroller::class,'register_products'])->name('register_products');  
















//Route::get('/country/edit/{id}', [CountryController::class, 'actionEdit'])->name('country.action.edit');
//Route::put('/country/{id}', [CountryController::class, 'edit'])->name('country.edit');









Route::get('/home', function () { 
    return view('home');
});

