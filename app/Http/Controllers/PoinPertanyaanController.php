<?php

namespace App\Http\Controllers;

use App\Poin;
use App\PoinUser;
use Illuminate\Http\Request;

class PoinPertanyaanController extends Controller
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
        $poin = new Poin();
        $poinUser = new PoinUser();
        
        $poin->user_id = $request->input('user_id');
        $poin->pertanyaan_id = $request->input('pertanyaan_id');

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
     * @param  \App\Poin  $poin
     * @return \Illuminate\Http\Response
     */
    public function show(Poin $poin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Poin  $poin
     * @return \Illuminate\Http\Response
     */
    public function edit(Poin $poin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Poin  $poin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poin $poin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poin  $poin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poin $poin)
    {
        //
    }
}
