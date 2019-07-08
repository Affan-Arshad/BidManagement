<?php

namespace App;

use App\Bid;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $guarded = [];
    public function bid() {
        return $this->belongsTo(Bid::class);
    }
}
