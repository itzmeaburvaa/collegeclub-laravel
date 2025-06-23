<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $table = 'clubs'; // your table name in MySQL

    // Allow mass-assignment for these columns (optional if you use fillable)
    
   protected $fillable = [
    'club_name',          // previously 'cname'
    'logo',
    'introduction',       // previously 'intro'
    'mission',
    'staff_coordinator_name',  // previously 'faculty'
    'staff_coordinator_email', // previously maybe 'facultyno'
    'staff_coordinator_photo', // new field
    'year_started',       // previously 'year'
];


    // timestamps false if your table doesn't have created_at/updated_at
    public $timestamps = false;
}