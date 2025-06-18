<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeZone extends Model
{

    use HasFactory;
    protected $table = 'time_zone'; // Specify the table name
    public $timestamps = false; // Disable timestamps if the table doesn't have created_at and updated_at columns

}
