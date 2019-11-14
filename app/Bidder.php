<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidder extends Model
{
    protected $fillable = ['name'];

    public function bids() {
        return $this->belongsToMany('App\Bid', 'bid_bidders');
    }

    public function proposals() {
        return $this->hasMany('App\Proposal');
    }
}
