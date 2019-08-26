<?php

namespace App\Http\Controllers;

use App\Bid;
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

        return view('dashboard.index', compact('bids'));
    }

}
