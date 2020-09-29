<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $fillable = [
        'lot_id',
        'bid_id',
        'bidder_id',
        'price',
        'duration_days',
    ];

    protected $table = 'bid_bidders';
    
    public function bidder() {
        return $this->belongsTo('App\Models\Bidder');
    }
    
    public function bid() {
        return $this->belongsTo('App\Models\Bid');
    }

    public function setPriceAttribute($value) {
        $this->attributes['price'] = str_replace(',', '', $value);
    }
}
