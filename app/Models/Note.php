<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = ['content', 'bid_id'];

    public function bid() {
        return $this->belongsTo('App\Models\Bid');
    }
}
