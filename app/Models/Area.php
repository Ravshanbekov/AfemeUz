<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable=[
        'total_area',
        'living_area',
        'kitchen_area',
        'post_id',
    ];
}
