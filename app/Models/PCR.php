<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PCR extends Model
{
    use HasFactory;
    protected $fillable = ['pcr_id','file'];
    protected $table = 'pcrs';
}
