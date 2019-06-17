<?php

namespace App;

use App\Bidder;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    public function organization() {
        return $this->belongsTo(Organization::class);
    }
    public function bidders() {
        return $this->belongsToMany(Bidder::class);
    }

    public function bidder($id) {
        return $this->bidders()->where('id', $id)->get();
    }
}
