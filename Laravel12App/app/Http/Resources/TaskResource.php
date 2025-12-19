<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
//    public function toArray(Request $request): array
//    {
//        return parent::toArray($request);
//    }
// we want data to be jason so
    public function toArray($request): array
    {
        return[
            'id'           =>  $this->id,
            'user_id'      =>  $this->user_id,
            'completed'    =>  $this->completed,
            'name'         =>  $this->name,
            'created_by'   =>  $this->created_by,
        ];
    }
}
