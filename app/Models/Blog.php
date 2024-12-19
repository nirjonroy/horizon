<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function whereToStudy()
    {
        return $this->belongsTo(WhereToStudy::class, 'where_to_study_id');
    }

    public function internationalStudentLife()
    {
        return $this->belongsTo(InternationalStudentLife::class, 'life_style_id');
    }

    
}
