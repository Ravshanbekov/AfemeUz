<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PartnerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            
            'title_uz'=>$this->title_uz,
            'title_ru'=>$this->title_ru,
            'title_en'=>$this->title_en,
            'body_uz'=>$this->body_uz,
            'body_ru'=>$this->body_ru,
            'body_en'=>$this->body_en,
            
            ];
    }
}
