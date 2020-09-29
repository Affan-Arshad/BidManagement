<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function taskNotes() {
        return $this->hasMany('App\Models\TaskNotes');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
