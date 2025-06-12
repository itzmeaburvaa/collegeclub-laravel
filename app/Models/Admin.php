<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin'; // not 'admins'
    public $timestamps = false; // if your table has no created_at/updated_at

    protected $fillable = ['username', 'password'];
}