<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['content', 'bid_id'];

    public function bid() {
        return $this->belongsTo('App\Bid');
    }
}
