<?php

namespace App\Http\Controllers;

use App\Models\role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/role/role');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/role/role');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new1=new role();
        $new1->role_name=$request->role_name;
        $new1->description=$request->description;
        $new1->save();
        return redirect()->route('create_role');
    }

    /**
     * Display the specified resource.
     */
    public function show(role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(role $role)
    {
        //
    }
}
