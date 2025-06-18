<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class onlineFee extends Model
{
    use HasFactory;

    protected $fillable = ['degree_id', 'program', 'total_fee', 'yearly', 'duration', 'status'];

    public function feesCategory()
    {
        return $this->belongsTo(feesCategory::class, 'degree_id'); // Assuming 'degree_id' is the foreign key in 'online_fees' table
    }
}
