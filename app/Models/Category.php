<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_uz',
        'name_en',
        'name_ru',
        'icon',
    ];
    
    public function products()
    {
        return $this->hasMany(Product::class, 'htype_id');
    }
}
