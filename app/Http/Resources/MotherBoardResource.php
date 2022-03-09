<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MotherBoardResource extends JsonResource
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
            'constructeur' => $this->constructeur,
            'format' => $this->format,
            'fréquence_mémoire' => $this->fréquence_mémoire,
            'description' => $this->description,
            'nom' => $this->nom,
            'proco_compatible' => $this->proco_compatible,
            'socket' => $this->socket
        ];
    }
}
