<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RAMResource extends JsonResource
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
            'capacité' => $this->capacité,
            'interface' => $this->interface,
            'latence' => $this->latence,
            'description' => $this->description,
            'nom' => $this->nom,
            'quantité' => $this->quantité,
            'link' => $this->link
        ];
    }
}
