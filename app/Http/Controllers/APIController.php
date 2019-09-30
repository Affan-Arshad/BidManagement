<?php

namespace App\Http\Controllers;

use App\Bid;

class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ongoingBids()
    {
        return Bid::where('status_id', 'ongoing')->get();
    }
}
