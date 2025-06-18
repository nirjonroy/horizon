<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PremiumCourseModule extends Model
{
     protected $fillable = [
        'premium_course_id', 'title', 'description', 'week',
    ];

    public function course()
    {
        return $this->belongsTo(PremiumCourse::class);
    }
}
