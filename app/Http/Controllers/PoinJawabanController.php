<?php

namespace App\Http\Controllers;

use App\PoinJawaban;
use App\PoinUser;
use Illuminate\Http\Request;

class PoinJawabanController extends Controller
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
        $poin = new PoinJawaban();
        $poinUser = new PoinUser();
        
        $poin->user_id = $request->input('user_id');
        $poin->jawaban_id = $request->input('jawaban_id');

        $poinUser->user_id = $request->input('user_id');

        if($request->submit == "up"){
            $poin->poin = 1;
            $poinUser->poin = 10;

        } else if($request->submit == "down") {
            $poin->poin = -1;
            $poinUser->poin = -1;
        }
        $poin->save();
        $poinUser->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PoinJawaban  $poinJawaban
     * @return \Illuminate\Http\Response
     */
    public function show(PoinJawaban $poinJawaban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PoinJawaban  $poinJawaban
     * @return \Illuminate\Http\Response
     */
    public function edit(PoinJawaban $poinJawaban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PoinJawaban  $poinJawaban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PoinJawaban $poinJawaban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PoinJawaban  $poinJawaban
     * @return \Illuminate\Http\Response
     */
    public function destroy(PoinJawaban $poinJawaban)
    {
        //
    }
}
