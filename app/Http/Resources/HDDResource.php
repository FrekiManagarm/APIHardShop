<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HDDResource extends JsonResource
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
            'RPM' => $this->RPM,
            'capacité' => $this->capacité,
            'format' => $this->format,
            'interface' => $this->interface,
            'description' => $this->description,
            'marque' => $this->marque,
            'mémoire_cache' => $this->mémoire_cache,
            'nom' => $this->nom,
            'transfert' => $this->transfert
        ];
    }
}
