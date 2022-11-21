<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConfigResource extends JsonResource
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
            'status' => $this->status,
            'current_step' => $this->current_step,
            'user' => new UserResource($this->whenLoaded('user')),
            'cpu' => new CPUResource($this->whenLoaded('cpu')),
            'cooling' => new CoolingResource($this->whenLoaded('cooling')),
            'gpu' => new GPUResource($this->whenLoaded('gpu')),
            'hdd' => new HDDResource($this->whenLoaded('hdd')),
            'motherboard' => new MotherBoardResource($this->whenLoaded('motherboard')),
            'ssd' => new SSDResource($this->whenLoaded('ssd')),
            'ram' => new RAMResource($this->whenLoaded('ram')),
            'case' => new BoitierResource($this->whenLoaded('boitier')),
        ];
    }
}
