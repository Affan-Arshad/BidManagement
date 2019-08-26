<?php

namespace App;

use App\Bidder;
use App\Evaluation;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{

    protected $fillable = [
        'name',
        'iulaan_no',
        'link',
        'category',
        'cost',
        'date',
        'organization_id',
        'status_id'
    ];

    public $statuses = [
        'prebid',
        'pending_estimate',
        'pending_proposal',
        'pending_evaluation',
        'pending_agreement',
        'ongoing',
        'pending_payment',
        'completed',
        'lost',
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
        return $this->belongsToMany(Bidder::class, 'bid_bidders');
    }

    public function proposals() {
        return $this->hasMany(Proposal::class);
    }

    public function evaluations() {
        return $this->hasMany(Evaluation::class);
    }

    public function bidder($id) {
        return $this->bidders()->where('id', $id)->get();
    }
}
