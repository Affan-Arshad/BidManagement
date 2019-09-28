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
        'pending_evaluation' => 'info',
        'pending_agreement' => 'info',
        'ongoing' => 'info',
        'pending_payment' => 'info',
        'completed' => 'primary',
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
        return $this->belongsTo(Organization::class);
    }

    public function bidders() {
        return $this->belongsToMany(Bidder::class, 'bid_bidders');
    }

    public function proposals() {
        return $this->hasMany(Proposal::class);
    }

    public function lots() {
        return $this->hasMany(Lot::class);
    }

    public function evaluations() {
        return $this->hasMany(Evaluation::class);
    }

    public function bidder($id) {
        return $this->bidders()->where('id', $id)->get();
    }

    public function hikaa() {
        return $this->proposals()->where('bidder_id', 16)->first();
    }
}
