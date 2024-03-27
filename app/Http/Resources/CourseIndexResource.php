<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
<<<<<<< HEAD
            "id"=> $this->id,
            "title"=> $this->title,
            "description"=> $this->description,
=======
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
>>>>>>> 7ee5ed741d13135d4182a9968e8f5dd3486b503a
        ];
    }
}
