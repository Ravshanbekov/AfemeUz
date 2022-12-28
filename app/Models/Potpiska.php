<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potpiska extends Model
{
    use HasFactory;
    protected $fillable = [
        'reltor_id',
        'user_id',
        ];
}
