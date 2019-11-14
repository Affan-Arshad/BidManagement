<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Bidder;
use App\BidBidder;
use App\Evaluation;
use App\Organization;
use Illuminate\Http\Request;

class BidController extends Controller
{

    public function __construct() {
        header("Access-Control-Allow-Origin: *");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bids = Bid::all();

        return view('bids.index', compact('bids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (isset($_GET['org']) && $_GET['org'] != null) {
            $id = $_GET['org'];
            $selected = Organization::where('id', $id)->first();
            $organizationNames = Organization::all()->pluck('name');
            $categories = array_values(Bid::all()->pluck('category')->unique()->toArray());
            return view('bids.create', compact('selected', 'organizationNames', 'categories'));
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
        header("Access-Control-Allow-Origin: *");
        // Check If Organization Already Exists
        $organization = null;
        $organizations = Organization::all();
        foreach ($organizations as $current) {
            if (strtolower($request->organization) == strtolower($current->name)) {
                $organization = $current;
            }
        }
        // If Organization Doesn't Exist, Create New
        if ($organization == null) {
            $organization = Organization::create(['name' => $request->organization]);
        }

        $data = $request->all();
        $data['organization_id'] = $organization->id;
        $bid = Bid::create($data);

        return redirect('/bids/' . $bid->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function show(Bid $bid)
    {

        $bidderNames = Bidder::all()->pluck('name');
        $criteriaNames = array_values(Evaluation::all()->pluck('criterion')->unique()->toArray());
        $bid->proposalsByLot = $bid->proposals->groupBy('lot_id');

        // Evaluation
        foreach ($bid->proposalsByLot as $lot => $proposals) {
            foreach ($bid->evaluations as $evaluation) {
                $criterion = strtolower($evaluation->criterion);
                // Price
                if (strtolower($evaluation->criterion) == 'price') {
                    $lowest = null;
                    foreach ($proposals as $proposal) {
                        if ($lowest == null || $proposal->price <= $lowest) {
                            $lowest = $proposal->price;
                        }
                    }
                    foreach ($proposals as $proposal) {
                        $proposal->eval += $lowest / $proposal->price * $evaluation->percentage;
                    }
                }
                // Duration
                else if (
                    $criterion == 'duration'
                    || $criterion == 'days'
                    || $criterion == 'delivery'
                ) {
                    $lowest = null;
                    foreach ($proposals as $proposal) {
                        if ($lowest == null || $proposal->duration_days <= $lowest) {
                            $lowest = $proposal->duration_days;
                        }
                    }
                    foreach ($proposals as $proposal) {
                        $proposal->eval += $lowest / $proposal->duration_days * $evaluation->percentage;
                    }
                } else {
                    foreach ($proposals as $proposal) {
                        $proposal->eval += $evaluation->percentage;
                    }
                }
            }
            $bid->proposalsByLot[$lot] = $proposals->sortByDesc('eval');
        }

        return view('bids.show', compact('bid', 'bidderNames', 'criteriaNames'));
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
        $organizationNames = Organization::all()->pluck('name');
        $categories = array_values(Bid::all()->pluck('category')->unique()->toArray());
        // dd($bid);
        return view('bids.edit', compact('bid', 'organizationNames', 'categories'));
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
        $bid->update($request->all());
        return redirect($request->redirect);
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
        $messages[]['danger'] = 'Deleted Bid: ' . $bid->name;
        \Session::flash('messages', $messages);
        return redirect()->back();
    }

    // Add Bidders to Bid
    public function addBidders(Request $request, Bid $bid)
    {
        // Check If Bidder Already Exists
        $bidder = null;
        $bidders = Bidder::all();
        foreach ($bidders as $current) {
            if (strtolower($request->name) == strtolower($current->name)) {
                $bidder = $current;
            }
        }
        // If Bidder Doesn't Exist, Create New
        if ($bidder == null) {
            $bidder = Bidder::create($request->all());
        }
        // Add Bidders Proposal for Bid to DB
        $var = BidBidder::create([
            'bid_id' => $bid->id,
            'bidder_id' => $bidder->id,
            'price' => $request->price,
            'duration_days' => $request->duration_days,
        ]);
        return redirect()->back();
    }

    // Remove Bidder from Bid
    public function removeBidder(Bid $bid, Bidder $bidder)
    {
        $bid->bidders()->detach($bidder->id);
        return redirect()->back();
    }
}
