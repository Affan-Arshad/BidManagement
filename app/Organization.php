<?php

namespace App;

use App\Bid;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public function bids() {
        return $this->hasMany(Bid::class);
    }
}
