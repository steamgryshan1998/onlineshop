<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category_id,
            'manufacturer_id' => $this->manufacturer_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'category_name' => $this->category->name,
            'manufacturer' => $this->manufacturer->name,
            'image' => $this->image
                ? Storage::disk('public')->url($this->image)
                : null,
        ];
    }
}
