<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RezResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

     public static $wrap= 'rezervacija';
    public function toArray($request)
    {
        return [
'ime'=>$this->resource->ime,
'prezime'=>$this->resource->prezime,
'datum_preuzimanja'=>$this->resource->datum_preuzimanja,
'brDana'=>$this->resource->brDana,
'kontakt'=>$this->resource->kontakt,
'user_id'=>new UserResource($this->resource->user),
'trotinet_id'=>new TrotinetResource($this->resource->trotinet),

        ];
    }
}
