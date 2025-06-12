<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teammem extends Model
{
    use HasFactory;

    protected $table = 'teammem';

    protected $fillable = [
        'name',
        'photo',
        'year_of_study',
        'department',
        'club1',
        'club2',
        'club3',
    ];
}