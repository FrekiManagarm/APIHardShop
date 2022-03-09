<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GPUResource extends JsonResource
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
            'nom' => $this->nom,
            'frequence' => $this->frequence,
            'frequence_boost' => $this->frequence_boost,
            'nb_coeur' => $this->nb_coeur,
            'nb_ventilateur' => $this->nb_ventilateur,
            'nb_video_output' => $this->nb_video_output,
            'description' => $this->description
        ];
    }
}
