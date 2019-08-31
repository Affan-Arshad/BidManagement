<?php

namespace App\Http\Controllers;

use App\Bid;
use Carbon\Carbon;

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
        $bids = $bids->sortBy(function ($item, $key) use ($statuses) {
            return array_search($key, $statuses);
        });

        // Calculate Remaining Days for Ongoig Bids
        foreach ($bids as $status => $bidGrp) {
            if ($status == 'ongoing') {
                foreach ($bidGrp as $bid) {
                    if($bid->agreement_date && $bid->duration) {
                        // dd($bid->agreement_date);
                        $agreement_date = Carbon::createFromFormat('Y-m-d H:i:s', $bid->agreement_date);
                        $bid->due_date = $agreement_date->addDays($bid->duration);
                        $bid->remaining_days = $bid->due_date->diffInDays(Carbon::now()) . ' days till ' . $bid->due_date->format('d M Y - h:i a');
                    } else {
                        $bid->remaining_days = 'Set Agreement Date & Duration';
                    }
                }
            }
        }

        return view('dashboard.index', compact('bids'));
    }
}
