<?php

namespace App;

use App\Bid;
use Illuminate\Database\Eloquent\Model;

class Bidder extends Model
{
    public function bids() {
        return $this->belongsToMany(Bid::class);
    }
}
