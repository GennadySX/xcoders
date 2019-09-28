<?php

namespace App\Http\Controllers;

use App\Prop_About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

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
    public function create(Request $req, Prop_About $prop)
    {
        if ($req) {
            $prop->about_id = $req->about_id;
            $prop->type = $req->type;
            if ($prop->type == 'image') {
                if($req->hasFile('image')) {
                    $bkg = $req->file('image');
                    $filename = time().'.'.$bkg->getClientOriginalName();
                    Image::make($bkg)->save(public_path('/uploads/'.$filename));
                    $prop->value = $filename;
                }
            } else $prop->value = $req->value;
            if (isset($req->valtext) && strlen($req->valtext) > 0 ) {
                $prop->ValText = $req->valtext;
            }
            if ($prop->save()) return response()->json(['id'=> $prop->id], 200);
            return response()->json('error', 206);
        }
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
    public function update(Request $req, Prop_About $prop_About)
    {

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
