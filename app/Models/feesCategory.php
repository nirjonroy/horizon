<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feesCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status'];

    public function onlineFees()
    {
        return $this->hasMany(onlineFee::class, 'degree_id'); // Assuming 'degree_id' is the foreign key in 'online_fees' table
    }
}
