<?php

namespace App\Http\Resources;

use App\Helpers\Traits\ApiResponcer;
use App\Models\Like;
use App\Models\Client;
use App\Models\Reting;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    use ApiResponcer;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return
        [
            'id'=>$this->id,
            'image'=>$this->images,
            'check'=>$this->check,
            'user'=>$this->user,
            'video'=>$this->videos,
            'htype_id'=>$this->htype ,
            'sale_id'=>$this->sale,
            'longitude'=>$this->longitude ,
            'latitude'=>$this->latitude,
            'price_som'=> $this->price_som,
            'price_usd'=>$this->configuretion($this->price_som),
            'total_area_type'=>$this->total_area_type ,
            'total_area'=>$this->total_area ,
            'kitchen_area'=>$this->kitchen_area ,
            'living_area'=>$this->living_area ,
            'date'=>$this->date,
            'room'=>$this->room ,
            'repair_id'=>$this->repair ,
            'documents'=>$this->documents,
            'description'=>$this->description,
            'material_id'=>$this->material,
            'region_id'=>$this->region ,
            'city_id'=>$this->city ,
            'street'=>$this->street,
            'house'=>$this->house,
            'floor'=>$this->floor,
            'flat'=>$this->flat,
            'like'=>$this->like($this->likes),
            'reting'=> $this->reting($this->retings),
            'fullreyting'=> $this->retings,
            'trade'=>$this->trade,
            'ipoteka'=>$this->ipoteka,
            'view'=>$this->view,
            'likecount'=>count($this->likes),
            'created_at'=>$this->created_at ,
            'updated_at'=>$this->updated_at ,
            'solt'=>$this->solt ,
        ];
 
    }
     
}
