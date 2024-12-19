<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', // Add first_name here
        'surname',
        'email',
        'nationality',
        'nationality_other',
        'course_and_degree',
        'subject_of_interest',
        'course_name',
        'preferred_session',
        'comments',
        // Add other fillable attributes here
    ];
}
