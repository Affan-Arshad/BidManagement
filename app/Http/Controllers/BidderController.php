<?php

namespace App\Http\Controllers;

use App\Bidder;
use Illuminate\Http\Request;

class BidderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bidders = Bidder::all();
        return view('bidders.index', compact('bidders'));
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
     * @param  \App\Bidder  $bidder
     * @return \Illuminate\Http\Response
     */
    public function show(Bidder $bidder)
    {
        return view('bidders.show', compact('bidder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bidder  $bidder
     * @return \Illuminate\Http\Response
     */
    public function edit(Bidder $bidder)
    {
        return view('bidders.edit', compact('bidder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bidder  $bidder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bidder $bidder)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $bidder->name = $request->name;
        $bidder->save();
        
        return redirect('/bidders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bidder  $bidder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bidder $bidder)
    {
        $bidder->delete();
        $messages[]['danger'] = 'Deleted Bidder: '.$bidder->name;
        \Session::flash('messages', $messages);
        return redirect()->back();
    }
}
