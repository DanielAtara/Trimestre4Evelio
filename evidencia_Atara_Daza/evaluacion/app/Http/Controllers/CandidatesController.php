<?php

namespace App\Http\Controllers;

use App\Models\candidates;
use App\Models\roles;
use App\Models\users;
use Illuminate\Http\Request;

class CandidatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios=users::all();
        return view('/candidates/candidates');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/candidates/candidates');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new1=new candidates();
        $new1->selection_status=$request->selection_status;
        $new1->points=$request->points;
        $new1->user_id=$request->user_id;

        $new1->save();

        return redirect()->route('create_candidate');
    }

    /**
     * Display the specified resource.
     */
    public function show(candidates $candidates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(candidates $candidates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, candidates $candidates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(candidates $candidates)
    {
        //
    }
}
