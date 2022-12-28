<?php

namespace App\Http\Resources;


use App\Models\Reting;
use App\Models\Product;
use App\Models\Potpiska;
use App\Models\Like;
use App\Models\Client;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

     
     
    public function toArray($request)
    {
    
        // if(!empty($this->likes->all())){
        //     $favorites = PostResource::collection($this->favorites($this->likes->all()));
        // }else{
        //     $favorites = null;
        // }
        // if(!empty($this->posts)){
        //     $posts = PostResource::collection($this->posts->all());
        // }else{
        //     $posts = null;
        // }
        // if(!empty($this->reting)){
        //     $fullreting = $this->fullreting($this->reting->all());
        // }else{
        //     $fullreting = null;
        // }
        // if(!empty($this->reting)){
        //     $reting = $this->count($this->reting->all());
        // }else{
        //     $reting = null;
        // }
        return [
            'id'=> $this->id,
            'name'=> $this->name,
            'lastname'=> $this->lastname,
            'image'=> $this->image,
            'email'=> $this->email,
            'phone'=> $this->phone,
            'pasport'=> $this->passport,
            'user_type'=> $this->user_type,
            'devays_id'=> $this->devays_id,
            'devays_type'=> $this->devays_type,
            'region_id'=> $this->region,
            'password'=> $this->password,
            'longitude'=> $this->longitude,
            'latitude'=> $this->latitude,
            'experience'=> $this->experience,
            'description'=> $this->description,
            'favorites'=>PostResource::collection(Product::find($this->likes()->pluck('post_id'))),
            'posts'=>PostResource::collection($this->posts->all()),
            'reting'=>$this->count($this->reting->all()),
            'fullreyting'=>$this->fullreting($this->reting->all()),
            'comment'=>$this->comment,
            'reltors'=>$this->potpiska,
            'created_at'=>$this->created_at ,
            'updated_at'=>$this->updated_at ,
        ];
    }
}
