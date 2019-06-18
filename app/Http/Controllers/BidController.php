<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Bidder;
use App\BidBidder;
use App\Organization;
use Illuminate\Http\Request;

class BidController extends Controller
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
        if(isset($_GET['org']) && $_GET['org'] != null) {
            $id = $_GET['org'];
            $selected = Organization::where('id', $id)->first();
            $organizations = Organization::all()->pluck('name', 'id');
            return view('bids.create', compact('selected', 'organizations'));
        }
        return redirect('/organizations');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bid = Bid::create($request->all());
        return redirect('/bids/'.$bid->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function show(Bid $bid)
    {
        $list = Bidder::all()->pluck('name');
        return view('bids.show', compact('bid', 'list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function edit(Bid $bid)
    {
        $organizations = Organization::all()->pluck('name', 'id');
        return view('bids.edit', compact('bid', 'organizations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bid $bid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bid $bid)
    {
        $bid->delete();
        $messages[]['danger'] = 'Deleted Bid: '.$bid->name;
        \Session::flash('messages', $messages);
        return redirect()->back();
    }

    // Add Bidders to Bid
    public function addBidders(Request $request, Bid $bid) {
        $bidder = null;
        // Check If Bidder Already Exists
        $bidders = Bidder::all();
        foreach ($bidders as $current) {
            if(strtolower($request->name) == strtolower($current->name)) {
                $bidder = $current;
            }
        }
        // If Bidder Doesn't Exist, Create New
        if ($bidder == null) {
            $bidder = Bidder::create($request->all());
        }
        // Add Bidders Proposal for Bid to DB
        BidBidder::create([
            'bid_id' => $bid->id,
            'bidder_id' => $bidder->id,
            'price' => $request->price,
            'duration_days' => $request->duration_days,
        ]);
        return redirect()->back();
    }

    // Remove Bidder from Bid
    public function removeBidder(Bid $bid, Bidder $bidder) {
        $bid->bidders()->detach($bidder->id);
        return redirect()->back();
    }
}
