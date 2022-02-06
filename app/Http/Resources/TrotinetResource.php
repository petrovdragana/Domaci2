<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TrotinetResource extends JsonResource
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
                 'model'=>$this->resource->model,
                 'boja'=>$this->resource->boja,
                 'materijal'=>$this->resource->materijal,
                 'stanje'=>$this->resource->stanje,
                 'cena'=>$this->resource->cena,
                 'brzina'=>$this->resource->brzina,
                 'snaga'=>$this->resource->snaga,
                         ];
         }
    }

