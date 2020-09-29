<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'iulaan_no',
        'agreement_no',
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
        'completion_letter_status',
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

    public static $completion_letter_statuses = [
        'to_request' => 'danger',
        'requested' => 'warning',
        'received' => 'success',
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
        return $this->belongsTo('App\Models\Organization');
    }

    public function bidders() {
        return $this->belongsToMany('App\Models\Bidder', 'bid_bidders');
    }

    public function proposals() {
        return $this->hasMany('App\Models\Proposal');
    }

    public function notes() {
        return $this->hasMany('App\Models\Note');
    }

    public function lots() {
        return $this->hasMany('App\Models\Lot');
    }

    public function evaluations() {
        return $this->hasMany('App\Models\Evaluation');
    }

    public function bidder($id) {
        return $this->bidders()->where('id', $id)->get();
    }

    public function hikaa() {
        return $this->proposals()->where('bidder_id', 16)->first();
    }
}
