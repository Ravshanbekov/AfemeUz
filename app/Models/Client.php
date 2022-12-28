<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
 

class Client extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    use HasFactory;
    protected $fillable=[
        'name',
        'lastname',
        'image',
        'email',
        'experience',
        'description',
        'phone',
        'user_type',
        'devays_id',
        'devays_type',
        'region_id',
        'city_id',
        'password',
        'longitude',
        'latitude',
    ];
    public function likes(){
        return $this->hasMany(Like::class, 'user_id');
    }
    public function potpiska(){
        return $this->hasMany(Potpiska::class, 'user_id');
    }
    public function reting(){
        return $this->hasMany(Reting::class, 'user_id');
    }
    public function posts(){
        return $this->hasMany(Product::class, 'user_id');
    }
    public function comments(){
        return $this->hasMany(Comments::class, 'reltor_id');
    }
    public function region(){
        return $this->belongsto(Region::class, 'region_id');
    }
    public function favorites(){

        // return 
    }
    public function fullreting($retings){

    //   $retings = $reting->toArray();
        if(!empty($retings)){
            foreach($retings as $key=>$item){
            $fullreting = $item;
            $fullreting['author'] = Client::find($item['author'] );
            $test[] = $fullreting;
            }
         return $test;
        }else{
            return  null;
        }
    }
    public function count($retings){

    //   $retings = $reting->toArray();
        if(!empty($retings)){
            foreach($retings as $key=>$item){
            $full[]=$item['reting']; 
            }
            $count = count($full);
            $ful = array_sum($full);
            $reting = $ful / $count;
         return $reting;
        }else{
            return null;
        }
    }
  
}
