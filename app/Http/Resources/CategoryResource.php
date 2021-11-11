<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    //Resource соединяет все что нужно вернуть на фронт в виде одного массива
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'products_count' => $this->products_count,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
