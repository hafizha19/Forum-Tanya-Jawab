<?php

namespace App\Http\Controllers;

use App\KomentarJawaban;
use Illuminate\Http\Request;

class KomentarJawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        KomentarJawaban::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KomentarJawaban  $komentarJawaban
     * @return \Illuminate\Http\Response
     */
    public function show(KomentarJawaban $komentarJawaban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KomentarJawaban  $komentarJawaban
     * @return \Illuminate\Http\Response
     */
    public function edit(KomentarJawaban $komentarJawaban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KomentarJawaban  $komentarJawaban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KomentarJawaban $komentarJawaban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KomentarJawaban  $komentarJawaban
     * @return \Illuminate\Http\Response
     */
    public function destroy(KomentarJawaban $komentarJawaban)
    {
        //
    }
}
