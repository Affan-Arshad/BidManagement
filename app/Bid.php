<?php

namespace App;

use App\Lot;
use App\Bidder;
use Carbon\Carbon;
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
        // 'estimate',
        'registration_start_date',
        'registration_end_date',
        'info_date',
        'submission_date',
        'agreement_date',
        'extended_date',
        'duration',
        'organization_id',
        'status_id'
    ];

    public static $statuses = [
        'prebid' => 'primary',
        'pending_estimate' => 'danger',
        'pending_proposal' => 'warning',
        'ready_for_submission' => 'success',
        'pending_evaluation' => 'primary',
        'pending_agreement' => 'danger',
        'ongoing' => 'warning',
        'pending_payment' => 'success',
        'completed' => 'success',
        'lost' => 'dark',
        'dropped_/_cancelled' => 'light',
    ];

    // protected $casts = [
    //     'estimate' => 'array'
    // ];

    // public function getEstimateAttribute($estimate) {
    //     return json_decode($estimate, true);
    // }

    // public function setEstimateAttribute($value) {
    //     $estimate = [];

    //     foreach ($value as $arrayItem) {
    //         if (!is_null($arrayItem['key'])) {
    //             $estimate[] = $arrayItem;
    //         }
    //     }

    //     $this->attributes['estimate'] = json_encode($estimate);
    // }

    public function setCostAttribute($value) {
        $this->attributes['cost'] =  str_replace(',', '', $value);
    }
    
    public function organization() {
        return $this->belongsTo('App\Organization');
    }

    public function bidders() {
        return $this->belongsToMany('App\Bidder', 'bid_bidders');
    }

    public function proposals() {
        return $this->hasMany('App\Proposal');
    }

    public function notes() {
        return $this->hasMany('App\Note');
    }

    public function lots() {
        return $this->hasMany('App\Lot');
    }

    public function evaluations() {
        return $this->hasMany('App\Evaluation');
    }

    public function bidder($id) {
        return $this->bidders()->where('id', $id)->get();
    }

    public function hikaa() {
        return $this->proposals()->where('bidder_id', 16)->first();
    }
}
