<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'portion',
        'location',
        'phone',
        'status',
        'image'
    ];
}