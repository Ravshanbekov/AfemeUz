<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_uz',
        'name_en',
        'name_ru',
        'region_id',
    ];
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }
}
