<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResponseResource extends JsonResource
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
            'response_no' => $this->response_no,
            'name' => $this->name ?? 'カワイイ名無しさん',
            'content' => $this->content,
            'created_at' => $this->created_at->isoFormat('YYYY/M/D/(ddd) HH:mm:ss'),
            'updated_at' => $this->updated_at->isoFormat('YYYY/M/D/(ddd) HH:mm:ss'),
        ];
    }
}
