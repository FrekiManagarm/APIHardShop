<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CPUResource extends JsonResource
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
            'nom' => $this->nom,
            'image' => $this->image,
            'architecture' => $this->architecture,
            'cache' => $this->cache,
            'chipset' => $this->chipset,
            'chipset_graphique' => $this->chipset_graphique,
            'frequence' => $this->frequence,
            'frequence_boost' => $this->frequence_boost,
            'nb_coeur' => $this->nb_coeur,
            'nb_threads' => $this->nb_threads,
            'description' => $this->description,
            'overclocking' => $this->overclocking,
            'socket' => $this->socket,
            'type' => $this->type
        ];
    }
}
