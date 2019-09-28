<?php

namespace App\Http\Controllers;

use App\Prop_About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Prop_About::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prop_About  $prop_About
     * @return \Illuminate\Http\Response
     */
    public function show(Prop_About $prop_About)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prop_About  $prop_About
     * @return \Illuminate\Http\Response
     */
    public function edit(Prop_About $prop_About)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prop_About  $prop_About
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prop_About $prop_About)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prop_About  $prop_About
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prop_About $prop_About)
    {
        //
    }
}
