<?php

use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\userscontroller;
use App\Models\users;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('view/user',[userscontroller::class,'index'])->name('index_usuarios');
Route::get('create/createUser',[userscontroller::class,'create'])->name('create_users');
Route::post('save/saveUser',[userscontroller::class,'store'])->name('save_users');
Route::get('updateUser/{users}',[userscontroller::class,'edit'])->name('edit_users');
Route::put('/users/{id}',[userscontroller::class, 'update'])->name('update_users');

Route::get('view/candidate',[CandidatesController::class,'index'])->name('index_candidates');
Route::get('create/createcandidate',[CandidatesController::class,'create'])->name('create_candidate');
Route::post('save/saveCandidate',[CandidatesController::class,'store'])->name('save_candidate');

Route::get('view/rol',[RoleController::class,'index'])->name('index_roles');
Route::get('create/createRole',[RoleController::class,'create'])->name('create_role');
Route::post('save/saveRole',[RoleController::class,'store'])->name('save_role');
Route::get('/rol/{role}',[RoleController::class,'edit'])->name('edit_role');
Route::post('save/{id}',[RoleController::class,'update'])->name('update_role');

