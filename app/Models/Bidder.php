<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidder extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function bids() {
        return $this->belongsToMany('App\Models\Bid', 'bid_bidders');
    }

    public function proposals() {
        return $this->hasMany('App\Models\Proposal');
    }
}
