<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NetworkResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            
            'telegram'=>$this->telegram,
            'instagram'=>$this->instagram,
            'icon'=>$this->icon,
            
            
            
            
            ];
    }
}
