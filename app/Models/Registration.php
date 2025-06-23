<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
     // Only created_at

    protected $fillable = [
    'name',
    'roll_no',
    'email',
    'phone',
    'photo',
    'department',
    'created_at',
];

}