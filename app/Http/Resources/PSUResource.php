<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PSUResource extends JsonResource
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
            'id' => $this->id,
            'image' => $this->image,
            'certif' => $this->certif,
            'format' => $this->format,
            'description' => $this->description,
            'marque' => $this->marque,
            'modulaire' => $this->modulaire,
            'nom' => $this->nom,
            'puissance' => $this->puissance
        ];
    }
}
