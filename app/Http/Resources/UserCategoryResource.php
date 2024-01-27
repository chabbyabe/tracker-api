<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'user' => UserResource::collection($this->user),
            'user_subcategories' => UserSubcategoryResource::collection($this->user_subcategories),
            'created_at' => $this->created_at,
        ];
    }
}
