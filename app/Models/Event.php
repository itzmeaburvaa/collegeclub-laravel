<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    protected $fillable = [
        'club_id',
        'event_name',
        'description',
        'date',
        'time',
        'image_path'
    ];

    protected $dates = ['date', 'created_at', 'updated_at'];

    // ✅ Add this relationship
    public function club()
    {
        return $this->belongsTo(Club::class, 'club_id');
    }
}

