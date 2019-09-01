<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Lot;
use Illuminate\Http\Request;

class LotController extends Controller
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
    public function create(Bid $bid)
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Bid $bid)
    {
        $lot = Lot::create($request->all());
        return redirect("/bids/$bid->id?focus=lot$lot->id");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lot  $lot
     * @return \Illuminate\Http\Response
     */
    public function show(Lot $lot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lot  $lot
     * @return \Illuminate\Http\Response
     */
    public function edit(Lot $lot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lot  $lot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bid $bid, Lot $lot)
    {
        
        $lot->name = $request->name;
        $lot->save();
        
        return redirect("/bids/$bid->id?focus=lot$lot->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lot  $lot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bid $bid, Lot $lot)
    {
        $lot->delete();
        return redirect()->back();
    }
}
