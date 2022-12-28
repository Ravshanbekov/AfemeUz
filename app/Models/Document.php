<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'url',
        'post_id',
    ];
    
     public function posts()
    {
        return $this->hasMany(Product::class, 'post_id');
    }
}
