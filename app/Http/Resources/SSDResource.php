<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SSDResource extends JsonResource
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
            'connectique' => $this->connectique,
            'format' => $this->format,
            'interface' => $this->interface,
            'lecture' => $this->lecture,
            'ecriture' => $this->ecriture,
            'description' => $this->description,
            'marque' => $this->marque,
            'nom' => $this->nom,
        ];
    }
}
