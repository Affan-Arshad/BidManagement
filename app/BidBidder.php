<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidBidder extends Model
{
    protected $fillable = [
        'bid_id',
        'bidder_id',
        'price',
        'duration_days',
    ];
}
