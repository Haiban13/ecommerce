<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class productResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        $category = $this->whenLoaded('category'); // Access loaded data
        $images = $this->whenLoaded('images');
        $stock = $this->whenLoaded('stock'); // Access loaded data

        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'imageId' => $this->image_id,
            'stockId' => $this->stock_id,
            'categoryId' => $this->category_id,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
            'category' => $category ? null : $category->toArray($request), // Include if loaded
            'images' => $images ? null : $images->toArray($request), // Convert images collection to array
            'stock' => $stock ? null : $stock->toArray($request), // Include if loaded
        ];
    }
}
