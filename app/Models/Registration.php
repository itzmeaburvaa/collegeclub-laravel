<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
     // Only created_at

    protected $fillable = [
        'name',
        'photo',
        'year_of_study',
        'department',
        'club1',
        'club2',
        'club3',
        'created_at',
    ];
}