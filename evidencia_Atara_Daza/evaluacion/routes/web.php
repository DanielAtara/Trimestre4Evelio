<?php

use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\userscontroller;
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

Route::get('create/createUser',[userscontroller::class,'create'])->name('create_users');
Route::post('save/saveUser',[userscontroller::class,'store'])->name('save_users');
Route::get('create/createcandidate',[CandidatesController::class,'create'])->name('create_candidate');
Route::post('save/saveCandidate',[CandidatesController::class,'store'])->name('save_candidate');
Route::get('create/createRole',[RoleController::class,'create'])->name('create_role');
Route::post('save/saveRole',[RoleController::class,'store'])->name('save_role');
