<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $table = 'club'; // your table name in MySQL

    // Allow mass-assignment for these columns (optional if you use fillable)
    
    protected $fillable = [
    'cname', 'logo', 'intro', 'mission', 'faculty',
    'facultyno', 'eventno', 'teamno', 'participants', 'year'
];

    // timestamps false if your table doesn't have created_at/updated_at
    public $timestamps = false;
}