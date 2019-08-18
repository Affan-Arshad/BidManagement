<?php

namespace App;

use App\Bid;
use Illuminate\Database\Eloquent\Model;

class Bidder extends Model
{
    protected $fillable = ['name'];

    public function bids() {
        return $this->belongsToMany(Bid::class, 'bid_bidders');
    }

    public function proposals() {
        return $this->hasMany(Proposal::class);
    }
}
