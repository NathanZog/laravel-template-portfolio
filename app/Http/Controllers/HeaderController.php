<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = Header::all();
        return view('header.index', compact('header'));
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
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        return view('header.show', compact('header'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header)
    {
        return view("header.edit", compact('header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Header $header)
    {
        $header->titrePrincipal = $request->titrePrincipal;
        $header->link1 = $request->link1;
        $header->link2 = $request->link2;
        $header->link3 = $request->link3;
        $header->img = $request->file('url')->hashName();
        $header->titre = $request->titre;
        $header->soustitre1 = $request->soustitre1;
        $header->soustitre2 = $request->soustitre2;
        $header->soustitre3 = $request->soustitre3;

        $header->save();

        $request->file("url")->storePublicly("assets/img", "public");

        return redirect()->route("header.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {   
        Storage::disk("public")->delete("assets/img/".$header->url);
        $header->delete();
        return redirect()->route("header.index");
    }
}
