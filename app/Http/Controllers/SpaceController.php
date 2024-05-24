<?php

namespace App\Http\Controllers;

use App\Models\s;
use App\Models\Space;
use Illuminate\Http\Request;

class SpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view("space.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Space $s)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Space $s)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Space $s)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Space $s)
    {
        //
    }
}
