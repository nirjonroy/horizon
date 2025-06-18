<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PremiumCourse extends Model
{
   protected $fillable = [
        'title', 'slug', 'instructor', 'duration', 'effort', 'format',
        'price', 'short_description', 'long_description', 'image', 'status',
    ];

    public function modules()
    {
        return $this->hasMany(PremiumCourseModule::class);
    }

    public function enrollments()
    {
        return $this->hasMany(PremiumCourseEnrollment::class);
    }
}
