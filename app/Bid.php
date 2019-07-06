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

    public function setCostAttribute($value) {
        $this->attributes['cost'] =  str_replace(',', '', $value);
    }

    public function getDate() {
        return str_replace(' ', 'T', $this->date);
    }

    public function dateDisplay() {
        $date = date_create($this->date);
        return date_format($date, 'd M Y - h:i a');
    }
    
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
