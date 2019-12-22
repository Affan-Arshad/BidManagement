<?php

namespace App\Http\Controllers;

use App\Bid;
use Carbon\Carbon;
use Illuminate\Http\Request;

class APIController extends Controller
{

    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ongoingBids()
    {
        return Bid::where('status_id', 'ongoing')
            ->orWhere('status_id', 'pending_payment')
            ->orWhere('status_id', 'pending_agreement')
            ->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function statuses()
    {
        return Bid::$statuses;
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
        return $bid;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bidsByStatus()
    {
        $bids = Bid::all();
        $bids = $bids->groupBy('status_id');
        // Sort Bids By Status as Defined in the statuses array
        $statuses = Bid::$statuses;
        $bids = $bids->sortBy(function ($bids, $key) use ($statuses) {
            return array_search($key, array_keys($statuses));
        });

        $bids->submissions = [];
        $bids->active = [];
        foreach ($bids as $status => $bidGrp) {
            // Calculate Remaining Days for Ongoig Bids
            if ($status == 'ongoing' || $status == 'pending_agreement' || $status == 'pending_payment') {
                foreach ($bidGrp as $bid) {
                    if ($bid->extended_date) {
                        $bid->remaining_days = Carbon::now()->diffInDays($bid->extended_date, false);
                    } elseif ($bid->agreement_date && $bid->duration) {
                        $agreement_date = Carbon::createFromFormat('Y-m-d H:i:s', $bid->agreement_date);
                        $bid->due_date = $agreement_date->addDays($bid->duration);
                        $bid->remaining_days = Carbon::now()->diffInDays($bid->due_date, false);
                        // $bid->remaining_days .=  ($bid->remaining_days > 0 ? ' days till ' : ' days from ') . $bid->due_date->format('d M Y - h:i a');
                    } else {
                        $bid->remaining_days = 'Set Agreement Date & Duration';
                    }

                    array_push($bids->active, $bid);
                }
            }

            // Sort prebid by info_date
            if ($status == 'prebid') {
                $bids[$status] = $bidGrp->sortBy('info_date');
            }

            // Group all fit for submissions 
            if ($status == 'pending_estimate' || $status == 'pending_proposal' || $status == 'ready_for_submission') {
                foreach ($bidGrp as $bid) {
                    // Set Status Colors
                    switch ($bid->status_id) {
                        case 'pending_estimate':
                            $bid->status_color = 'danger';
                            break;
                        case 'pending_proposal':
                            $bid->status_color = 'warning';
                            break;
                        case 'ready_for_submission':
                            $bid->status_color = 'success';
                            break;

                        default:
                            # code...
                            break;
                    }
                    array_push($bids->submissions, $bid);
                }
            }
        }

        // Sort Active by Remaining
        usort($bids->active, function ($bid1, $bid2) {
            if ($bid2->remaining_days < $bid1->remaining_days)
                return 1;
            else if ($bid2->remaining_days > $bid1->remaining_days)
                return -1;
            else
                return 0;
        });

        // Sort Submissions By Submission Date
        usort($bids->submissions, function ($bid1, $bid2) {
            if (strtotime($bid2->submission_date) < strtotime($bid1->submission_date))
                return 1;
            else if (strtotime($bid2->submission_date) > strtotime($bid1->submission_date))
                return -1;
            else
                return 0;
        });

        return $bids;
    }
}
