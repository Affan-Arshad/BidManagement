<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];

    public function taskNotes() {
        return $this->hasMany('App\TaskNotes');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
