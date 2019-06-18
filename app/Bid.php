<?php

namespace App;

use App\Bidder;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $fillable = [
        'name',
        'category',
        'cost',
        'date',
        'organization_id',
    ];
    
    public function organization() {
        return $this->belongsTo(Organization::class);
    }
    public function bidders() {
        return $this->belongsToMany(Bidder::class, 'bid_bidders')->withPivot('price', 'duration_days');;
    }

    public function bidder($id) {
        return $this->bidders()->where('id', $id)->get();
    }
}
