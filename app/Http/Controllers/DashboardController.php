<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Helpers\Helper;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bids = Bid::all();
        $bids = $bids->groupBy('status_id');
        // Sort Bids By Status as Defined in the statuses array
        $statuses = Bid::$statuses;
        $bids = $bids->sortBy(function($item, $key) use ($statuses) {
            return array_search($key, $statuses);
        });

        return view('dashboard.index', compact('bids'));
    }

}
