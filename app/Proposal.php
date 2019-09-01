<?php

namespace App;

use App\Bid;
use App\Bidder;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = [
        'lot_id',
        'bid_id',
        'bidder_id',
        'price',
        'duration_days',
    ];

    protected $table = 'bid_bidders';
    
    public function bidder() {
        return $this->belongsTo(Bidder::class);
    }
    
    public function bid() {
        return $this->belongsTo(Bid::class);
    }

    public function setPriceAttribute($value) {
        $this->attributes['price'] = str_replace(',', '', $value);
    }
}
